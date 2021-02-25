<?php

class ViewMain extends SugarView {

    /**
     * @deprecated Use __construct() instead
     */
    public function ViewMain() {
        self::__construct();
    }

    public function __construct() {
        $this->options['show_footer'] = false;
        parent::__construct();
    }

    /**
     * @see SugarView::_getModuleTitleParams()
     */
    protected function _getModuleTitleParams($browserTitle = false) {
        global $mod_strings;

        return array(
            translate('LBL_MODULE_NAME', 'Administration'),
            ModuleBuilderController::getModuleTitle(),
        );
    }

    function display() {
        global $app_strings, $current_user, $mod_strings, $theme;

        $smarty = new Sugar_Smarty();
        $type = $this->request->getValidInputRequest('type', null, 'main');
        $mbt = false;
        $admin = false;
        $mb = strtolower($type);
        $smarty->assign('TYPE', JSON::encode($type));
        $smarty->assign('app_strings', $app_strings);
        $smarty->assign('mod', $mod_strings);

        if (isset($GLOBALS['sugar_config']['icc_disable_studio']) && $GLOBALS['sugar_config']['icc_disable_studio'] == false) {
            switch ($type) {
                case 'studio':
                    //$smarty->assign('ONLOAD','ModuleBuilder.getContent("module=ModuleBuilder&action=wizard")');
                    require_once('modules/ModuleBuilder/Module/StudioTree.php');
                    $mbt = new StudioTree();
                    break;
                case 'mb':
                    //$smarty->assign('ONLOAD','ModuleBuilder.getContent("module=ModuleBuilder&action=package&package=")');
                    require_once('modules/ModuleBuilder/MB/MBPackageTree.php');
                    $mbt = new MBPackageTree();
                    break;

                case 'sugarportal':
                    require_once('modules/ModuleBuilder/Module/SugarPortalTree.php');
                    $mbt = new SugarPortalTree();
                    break;
                case 'dropdowns':
                    // $admin = is_admin($current_user);
                    require_once('modules/ModuleBuilder/Module/DropDownTree.php');
                    $mbt = new DropDownTree();
                    break;
                default:
                    //$smarty->assign('ONLOAD','ModuleBuilder.getContent("module=ModuleBuilder&action=home")');	
                    require_once('modules/ModuleBuilder/Module/MainTree.php');
                    $mbt = new MainTree();
            }
        }
        $smarty->assign('TEST_STUDIO', displayStudioForCurrentUser());
        $smarty->assign('ADMIN', is_admin($current_user));
        $smarty->display('modules/ModuleBuilder/tpls/includes.tpl');
        if ($mbt) {
            $smarty->assign('TREE', $mbt->fetch());
            $smarty->assign('TREElabel', $mbt->getName());
        }
        $userPref = $current_user->getPreference('mb_assist', 'Assistant');
        if (!$userPref)
            $userPref = "na";
        $smarty->assign('userPref', $userPref);

        ///////////////////////////////////
        require_once('include/SugarTinyMCE.php');
        $tiny = new SugarTinyMCE();
        $tiny->defaultConfig['width'] = 300;
        $tiny->defaultConfig['height'] = 300;
        $tiny->buttonConfig = "code,separator,bold,italic,underline,strikethrough,separator,justifyleft,justifycenter,justifyright,
	                         justifyfull,separator,forecolor,backcolor,
	                         ";
        $tiny->buttonConfig2 = "pastetext,pasteword,fontselect,fontsizeselect,";
        $tiny->buttonConfig3 = "";
        $ed = $tiny->getInstance();
        $smarty->assign("tiny", $ed);

        $smarty->display('modules/ModuleBuilder/tpls/index.tpl');
    }

}
