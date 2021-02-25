<?php

require 'custom/modules/ModuleBuilder/parsers/relationships/CustomDeployedRelationships.php';
require 'custom/modules/ModuleBuilder/parsers/CustomStandardField.php';

class CustomModuleBuilderController extends ModuleBuilderController {

    public function action_DeleteRelationship()
    {
        $relationshipName = $this->request->getValidInputRequest('relationship_name', 'Assert\ComponentName');
        $packageName = $this->request->getValidInputRequest('view_package', 'Assert\ComponentName');
        if ($relationshipName) {
            $videModule = $this->request->getValidInputRequest('view_module', 'Assert\ComponentName');
            if (!$packageName) {
                if (!empty($_REQUEST['remove_tables']))
                    $GLOBALS['mi_remove_tables'] = $_REQUEST['remove_tables'];
                $relationships = new CustomDeployedRelationships($videModule);
            } else {
                $mb = new ModuleBuilder ();
                $module = & $mb->getPackageModule($packageName, $videModule);
                $relationships = new UndeployedRelationships ($module->getModuleDir());
            }

            SugarAutoLoader::requireWithCustom('ModuleInstall/ModuleInstaller.php');
            $moduleInstallerClass = SugarAutoLoader::customClass('ModuleInstaller');
            /** @var ModuleInstaller $mi */
            $mi = new $moduleInstallerClass();
            $mi->id_name = 'custom' . $relationshipName; // provide the moduleinstaller with a unique name for this relationship - normally this value is set to the package key...
            $mi->installdefs['language'] = $relationships->generateLanguagePacks('<basepath>',null, $relationshipName);
            $mi->base_dir = '<basepath>';
            $mi->silent = true;

            VardefManager::clearVardef () ;

            $mi->uninstall_languages();

            $relationships->delete($relationshipName);
            $relationships->save();
            SugarRelationshipFactory::deleteCache();
        }
        $this->view = 'relationships';
    }

    public function action_SaveRelationship() {
        if (!empty($GLOBALS['current_user']) && empty($GLOBALS['modListHeader'])) {
            $GLOBALS['modListHeader'] = query_module_access_list($GLOBALS['current_user']);
        }

        if(isset($GLOBALS['dictionary'][$_REQUEST['relationship_name']])) {
            $error = 'Relationship with name ' . $_REQUEST['relationship_name'] . ' already exists';
            echo $error;
            throw new SugarException($error);
        }

        if($_REQUEST['lhs_module'] === $_REQUEST['rhs_module'] && $_REQUEST['inputLinkFieldNameLeft'] === $_REQUEST['inputLinkFieldNameRight']) {
            $error = 'Link field names must not be equal when both sides are the same modul';
            echo $error;
            throw new SugarException($error);
        }

        if (empty($_REQUEST ['view_package'])) {
            $relationships = new CustomDeployedRelationships ($_REQUEST ['view_module'], $_REQUEST['relationship_name']);
        } else {
            $mb = new ModuleBuilder ();
            $module = & $mb->getPackageModule($_REQUEST ['view_package'], $_REQUEST ['view_module']);
            $relationships = new UndeployedRelationships ($module->getModuleDir());
        }

        $relationships->addFromPost();
        // Since the build() call below will call save() again, save the rebuild
        // of relationship metadata for now
        $relationships->save(false);
        $GLOBALS['log']->debug("\n\nSTART BUILD");
        if (empty($_REQUEST ['view_package'])) {
            $relationships->build();
            if(method_exists($relationships, 'cleanUnusedFiles')) {
                $relationships->cleanUnusedFiles('custom/Extension/modules/relationships');
            }
            LanguageManager::clearLanguageCache($_REQUEST ['view_module']);
            LanguageManager::invalidateJsLanguageCache();
        }
        $GLOBALS['log']->debug("\n\nEND BUILD");
        $this->view = 'relationships';
    }

    private function shouldHandleAsStudioPlusField($field, $bean) {

        $isNew = empty($dictionary[$bean->object_name]["fields"][$field->name]);

        return $isNew || (isset($field->icc_is_studio_plus) && $field->icc_is_studio_plus);
    }

    public function action_SaveField()
    {
        $type = $this->request->getValidInputRequest('type');

        $field = get_widget($type);
        $field->populateFromPost($this->request);

        $packageName = $this->request->getValidInputRequest('view_package', 'Assert\ComponentName');
        $viewModule = $this->request->getValidInputRequest('view_module', 'Assert\ComponentName');

        if (!$packageName) {
            if ($viewModule) {
                $module = $viewModule;
                if ($module == 'Employees') {
                    $module = 'Users';
                }

                $bean = BeanFactory::newBean($module);
                if (!empty($bean)) {
                    $field_defs = $bean->field_defs;
                    if (isset($field_defs[$field->name . '_c'])) {
                        $GLOBALS['log']->error($GLOBALS['mod_strings']['ERROR_ALREADY_EXISTS'] . '[' . $field->name . ']');
                        sugar_die($GLOBALS['mod_strings']['ERROR_ALREADY_EXISTS']);
                    }
                }

                if($this->shouldHandleAsStudioPlusField($field, $bean)) {
                    $df = new CustomStandardField($module);
                } else {
                    $df = new DynamicField($module);
                }
                $mod = BeanFactory::newBean($module);
                $obj = BeanFactory::getObjectName($module);
                $df->setup($mod);

                $field->save($df);
                $this->action_SaveLabel();
                include_once 'modules/Administration/QuickRepairAndRebuild.php';
                global $mod_strings;
                $mod_strings['LBL_ALL_MODULES'] = 'all_modules';
                $repair = new RepairAndClear();

                // Set up an array for repairing modules
                $repairModules = array($module);
                if ($module === 'Users') {
                    $repairModules[] = 'Employees';
                }
                $repair->repairAndClearAll(array('rebuildExtensions', 'clearVardefs', 'clearTpls', 'clearSearchCache'), $repairModules, true, false);
                //Ensure the vardefs are up to date for this module before we rebuild the cache now.
                VardefManager::loadVardef($module, $obj, true);

                //Make sure to clear the vardef for related modules as well.
                $relatedMods = array();
                if (!empty($field->dependency)) {
                    $relatedMods = array_merge($relatedMods, VardefManager::getLinkedModulesFromFormula($bean, $field->dependency));
                }
                if (!empty($field->formula)) {
                    $relatedMods = array_merge($relatedMods, VardefManager::getLinkedModulesFromFormula($bean, $field->formula));
                }

                // But only if there are related modules to work on, otherwise
                // we end up handling these processes for ALL THE MODULES
                if ($relatedMods) {
                    $repair->repairAndClearAll(array('clearVardefs', 'clearTpls', 'rebuildExtensions'), array_values($relatedMods), true, false);

                    foreach ($relatedMods as $mName => $oName) {
                        VardefManager::loadVardef($mName, $oName, true);
                    }
                }
                //#28707 ,clear all the js files in cache
                $repair->module_list = array();
                $repair->clearJsFiles();

                // Clear the metadata cache for labels and the requested module
                $repair->module_list = array($module);
                $repair->repairMetadataAPICache(MetaDataManager::MM_LABELS);
                $repair->repairMetadataAPICache(MetaDataManager::MM_ORDEREDLABELS);
            }
        } else {
            $mb = new ModuleBuilder ();
            $module = & $mb->getPackageModule($packageName, $viewModule);
            $field->save($module);
            $module->mbvardefs->save();
            // get the module again to refresh the labels we might have saved with the $field->save (e.g., for address fields)
            $module = & $mb->getPackageModule($packageName, $viewModule);
            if (isset ($_REQUEST ['label']) && isset ($_REQUEST ['labelValue']))
                $module->setLabel($GLOBALS ['current_language'], $_REQUEST ['label'], $_REQUEST ['labelValue']);
            $module->save();
        }
        $this->view = 'modulefields';
        LanguageManager::invalidateJsLanguageCache();
    }

    public function action_DeleteField()
    {
        $type = $this->request->getValidInputRequest('type');
        $name = $this->request->getValidInputRequest('name', 'Assert\ComponentName');

        $field = get_widget($type);
        $field->name = $name;

        $viewPackage = $this->request->getValidInputRequest('view_package', 'Assert\ComponentName');
        $moduleName = $this->request->getValidInputRequest('view_module', 'Assert\ComponentName');

        $module = null;
        if (!$viewPackage) {
            if ($name && $moduleName) {

                // bug 51325 make sure we make this switch or delete will not work
                if ($moduleName == 'Employees')
                    $moduleName = 'Users';

                $seed = BeanFactory::newBean($moduleName);
                $isStudioPlus = $GLOBALS['dictionary'][$seed->object_name]['fields'][$field->name]['icc_is_studio_plus'] ?? false;
                if($isStudioPlus) {
                    $df = new CustomStandardField($moduleName);
                    $df->setup($seed);
                    $df->removeVardefExtension($field);
                } else {
                    $df = new DynamicField ($moduleName);
                    $df->setup($seed);
                    //Need to load the entire field_meta_data for some field types
                    $field = $df->getFieldWidget($moduleName, $field->name);
                    $field->delete($df);
                }

                $GLOBALS ['mod_strings']['LBL_ALL_MODULES'] = 'all_modules';
                $_REQUEST['execute_sql'] = true;
                include_once 'modules/Administration/QuickRepairAndRebuild.php';
                $repair = new RepairAndClear();
                $repair->repairAndClearAll(array('rebuildExtensions', 'clearVardefs', 'clearTpls'), array($moduleName), true, false);

                $module = StudioModuleFactory::getStudioModule($moduleName);
            }
        } else {
            $mb = new ModuleBuilder ();
            $module = & $mb->getPackageModule($viewPackage, $moduleName);
            $field = $module->getField($field->name);
            $field->delete($module);
            $mb->save();
        }

        if (!$module) {
            $GLOBALS['log']->fatal('Module not found');
            return;
        }

        $module->removeFieldFromLayouts($field->name);
        $this->view = 'modulefields';

        $label = $this->request->getValidInputRequest('label');
        $labelValue = $this->request->getValidInputRequest('label');

        if (isset($GLOBALS['current_language'])
            && $label !== null
            && $labelValue !== null
            && $moduleName !== null
        ) {
            $this->DeleteLabel($GLOBALS['current_language'], $label, $labelValue, $moduleName);
            $this->metadataApiCacheCleared = true;
        }

        // Clear the metadata cache if it hasn't been done already
        if (!$this->metadataApiCacheCleared && !empty($moduleName)) {
            // This removes the labels associated with the field and rebuilds
            // the api cache for the module
            $repair->module_list = array($moduleName);
            $repair->repairMetadataAPICache('labels');
        }
    }
}
