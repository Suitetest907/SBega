<?php
namespace Sugarcrm\Sugarcrm\custom\Console\Command;

use Sugarcrm\Sugarcrm\Console\CommandRegistry\Mode\InstanceModeInterface;
use Sugarcrm\Sugarcrm\custom\Service\TeamService;
use Sugarcrm\Sugarcrm\DependencyInjection\Container;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Helper\QuestionHelper;
use Symfony\Component\Console\Helper\Table;
use Symfony\Component\Console\Helper\TableSeparator;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\Question;

/**
 * Class ICCFixVardefsCommand
 * @package Sugarcrm\Sugarcrm\custom\Console\Command
 *
 * This command checks all modules vardefs under custom/Extensions for naming and content convention.
 */
class ICCFixVardefsCommand extends Command implements InstanceModeInterface
{
    /**
     * All files defined here will be ignored by the cli command. Useful if corrections for fields in this file dont make sense.
     * Like files added by other packages or files with fields all related to the same link.
     */
    private $ignoreFileNames = [
        'dri-customer-journey.php',
        'acls.php',
        'full_text_search_admin.php'
    ];

    /**
     * Add the module name like its named in the path. I.e. Accounts, Leads, etc.
     * @var array
     */
    private $ignoreModules = [
        'DRI_SubWorkflow_Templates',
        'DRI_SubWorkflows',
        'DRI_Workflow_Task_Templates',
        'DRI_Workflow_Template',
        'DRI_Workflows',
        'ICC_GeoData',
        'ICC_CTI',
        'ICC_CTIRecords'
    ];

    private $customIgnoreFilesFile = 'icc_studioplus_ignored_files.txt';
    private $customIgnoreModulesFile = 'icc_studioplus_ignored_modules.txt';

    protected function configure()
    {
        $this
            ->setName('icc:vardefs:fix')
            ->addArgument('module', InputArgument::OPTIONAL, 'Defines the module which should be processed. Defaults to all (*)', '*')
            ->addOption('interactive', 'i', InputOption::VALUE_OPTIONAL, 'Allows to add handable errors to ignore list file by file', false)
            ->setDescription('Check code description inside this class')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $handle = fopen($this->customIgnoreFilesFile, "r");
        if ($handle)
        {
            while (($line = fgets($handle)) !== false) {
                $this->ignoreFileNames[] = trim($line);
            }
        }
        fclose($handle);

        $handle = fopen($this->customIgnoreModulesFile, "r");
        if ($handle) {
            while (($line = fgets($handle)) !== false) {
                $this->ignoreModules[] = trim($line);
            }
        }
        fclose($handle);

        $currentVardefFiles = array_filter(glob(sprintf('custom/Extension/modules/%s/Ext/Vardefs/*', $input->getArgument('module'))));

        /**
         * Handable Errors are "errors" due to convention issues like file naming or having multiple fields defined in one file.
         * These errors will be fixed by this command by splitting all field defs in single files with studio conform names.
         *
         */
        $handableErrorList = [];

        /**
         * Unhandable errors are "errors" which cant be solved by this command due to their content which would be interpreted wrong.
         * Like loops or whatever. The files should be fixed by hand or added to the ignore list above.
         */
        $unhandableErrorList = [];

        /**
         * The final list of files to create or update with their vardefs.
         */
        $createList = [];

        global $dictionary;

        foreach ($currentVardefFiles as $filePath) {

            $dictionary = [];
            $handableErrorList[$filePath] = [];

            $filePathParts = explode('/', $filePath);
            $fileName = array_pop($filePathParts);

            if(in_array($fileName, $this->ignoreFileNames) || in_array($filePath, $this->ignoreFileNames)) {
                continue;
            }

            if(strpos($fileName, '_link') !== false)
            {
                continue;
            }

            /**
             * Registering special error handler so that we can catch parse errors, warnings and notices when loading the php file.
             * If there are variables in this file, it would cause an warnings since those variables in vardefs are
             * typically defined outside of the the file
             */
            set_error_handler(function ($errno, $errstr, $errfile, $errline, $errcontext) use (&$unhandableErrorList, $filePath) {
                $unhandableErrorList[$filePath][] = sprintf('CAUTION: unfixable issue on line %s: %s', $errline, $errstr);
            });

            require $filePath;

            restore_error_handler();

            $modules = array_keys($dictionary);

            if(count($modules) <> 1) {
                $handableErrorList[$filePath][] = sprintf('file contains vardefs for none or more than one module');
            }

            $hasShownWarningsForThisFile = false;

            $newCreateDefs = [];

            $hasIgnoredModuleVardefs = false;

            foreach ($modules AS $module) {

                if(in_array($module, $this->ignoreModules)) {
                    $hasIgnoredModuleVardefs = true;
                    continue;
                }

                /**
                 * Having ignored and not ignored modules vardefs makes it too complicated. Hard error
                 */
                if($hasIgnoredModuleVardefs)
                {
                    $unhandableErrorList[$filePath][] = sprintf('Found vardefs for ignored and not-ignored modules in one file. Please fix this file by hand');
                    continue;
                }

                $beanName = array_search($module, $GLOBALS['beanList']);

                $targetModuleDir = 'custom/Extension/modules/' . $beanName . '/Ext/Vardefs/';

                $newCreateDefs[$targetModuleDir . 'icc_custom_bean_defs.php'] = [
                    'module' => $beanName,
                    'vardefs' => [],
                    'isField' => false
                ];

                if(!count($dictionary[$module]))
                {
                    continue; // Seems totally empty
                }

                $copyVardefs = $dictionary[$module];
                unset($copyVardefs['fields']);

                if(count($copyVardefs)) {
                    $newCreateDefs[$targetModuleDir . 'icc_custom_bean_defs.php']['vardefs'] = array_merge($newCreateDefs[$targetModuleDir . 'icc_custom_bean_defs.php']['vardefs'], $copyVardefs);
                }

                if(!isset($dictionary[$module]['fields']))
                {
                    continue;
                }

                $fields = array_keys($dictionary[$module]['fields']);

                foreach ($fields AS $field) {
                    $completeTargetPath = $targetModuleDir . 'sugarfield_' . $field . '.php';

                    if(!isset($newCreateDefs[$completeTargetPath])) {
                        $newCreateDefs[$completeTargetPath] = [
                            'module' => $module,
                            'vardefs' => [],
                            'fieldName' => $field,
                            'isField' => true
                        ];
                    }

                    if(!$hasShownWarningsForThisFile) {
                        if(strpos($fileName, 'sugarfield_') !== 0) {
                            $handableErrorList[$filePath][] = sprintf('file does not follow naming convention');
                        }

                        if(count($fields) > 1) {
                            $handableErrorList[$filePath][] = sprintf('file contains more than one field for module %s', $module);
                        }

                        $hasShownWarningsForThisFile = true;
                    }

                    $newCreateDefs[$completeTargetPath]['vardefs'] = array_merge($newCreateDefs[$completeTargetPath]['vardefs'], $dictionary[$module]['fields'][$field]);
                }
            }

            foreach ($newCreateDefs AS $filePathTarget => $fieldDefs) {
                if(!isset($createList[$filePathTarget])) {
                    $createList[$filePathTarget] = $fieldDefs;
                    $createList[$filePathTarget]['sources'] = [$filePath];
                    continue;
                }

                $createList[$filePathTarget]['vardefs'] = array_merge($createList[$filePathTarget]['vardefs'], $fieldDefs['vardefs']);
                $createList[$filePathTarget]['wasMerged'] = true;

                if(!in_array($filePath, $createList[$filePathTarget]['sources'])) {
                    $createList[$filePathTarget]['sources'][] = $filePath;
                }
            }
        }

        $handableErrorList = array_filter($handableErrorList, function ($errors) {
            return count($errors) > 0;
        });

        $createList = array_filter($createList, function ($defs, $targetPath) use ($handableErrorList, $unhandableErrorList) {

            if(count($defs['sources']) > 1) {
                return true;
            }

            $source = $defs['sources'][0];

            return isset($handableErrorList[$source]) || isset($unhandableErrorList[$source]) || $source !== $targetPath;

        }, ARRAY_FILTER_USE_BOTH);

        $questionHelper = new QuestionHelper();

        if($input->getOption('interactive') == 1)
        {
            $unsetKeys = [];
            foreach ($handableErrorList AS $filePath => $errors)
            {
                $question = new Question(sprintf("\n------ handable error in: %s\n * %s\nAdd to ignore? (y|n <- default)\n", $filePath, implode("\n * ", array_filter($errors))), false);
                $addToIgnore = $questionHelper->ask($input, $output, $question);

                if(in_array(strtolower($addToIgnore), ['y', 'yes']))
                {
                    exec(sprintf('echo "%s" >> %s', $filePath, $this->customIgnoreFilesFile));
                    $unsetKeys[] = $filePath;
                }
            }

            foreach ($unsetKeys AS $filePath)
            {
                unset($handableErrorList[$filePath]);
            }
        }

        $this->printTable($output, $handableErrorList, $unhandableErrorList);

        if(count($unhandableErrorList)) {
            $output->writeln('Please fix unhandable errors first');
            return;
        }

        $questionHelper = new QuestionHelper();
        $proceed = $questionHelper->ask($input, $output, new Question(sprintf("Proceed with rebuilding (creating %s files, deleting %s files)?\n(Type 'yes' to continue)\n", count($createList), count($handableErrorList)), false));

        if($proceed !== 'yes') {
            return;
        }

        for($x = 0; $x < 5; $x++) {
            $output->writeln('Proceeding in ' . (5 - $x) . '...');
            sleep(1);
        }

        $output->writeln('Unlinking orig files');
        $progress = new ProgressBar($output, count($handableErrorList));
        $progress->start();

        foreach (array_keys($handableErrorList) AS $file) {
            unlink($file);
            $progress->advance();
        }

        $progress->finish();
        $output->writeln('');

        $createList = array_filter($createList, function ($defs) {
            return count($defs['vardefs']) > 0;
        });

        $output->writeln('Writing new files');
        $progress = new ProgressBar($output, count($createList));
        $progress->start();

        foreach ($createList AS $filePath => $defs) {

            $out =  "<?php\n // created by studioplus: " . date('Y-m-d H:i:s') . "\n";
            foreach ($defs['vardefs'] as $property => $val)
            {
                if($defs['isField']) {
                    $out .= override_value_to_string_recursive(array($defs['module'], "fields", $defs['fieldName'], $property), "dictionary", $val) . PHP_EOL;
                } else {
                    $out .= override_value_to_string_recursive(array($defs['module'], $property), "dictionary", $val) . PHP_EOL;
                }
            }

            $dirPath = explode('/', $filePath);
            array_pop($dirPath);
            $dirPath = implode('/', $dirPath);

            if (!file_exists($dirPath)) {
                mkdir_recursive($dirPath);
            }

            $fh = @sugar_fopen($filePath, 'w');

            if($fh) {
                fputs($fh, $out);
                fclose($fh);
            } else {
                $output->writeln('Could not write file ' . $filePath);
                return;
            }

            $progress->advance();
        }

        $progress->finish();
        $output->writeln('');
    }

    private function printTable($output, $handableErrorList, $unhandableErrorList)
    {
        $table = new Table($output);
        $table->setHeaders(['fileName', 'errors']);

        $output->writeln('Handable Errors');
        foreach ($handableErrorList AS $fileName => $errorsForFile)
        {
            $index = 0;
            foreach ($errorsForFile AS $error) {
                if($index === 0) {
                    $table->addRow([$fileName, $error]);
                } else {
                    $table->addRow(['', $error]);
                }
                $index++;
            }
            $table->addRow(new TableSeparator());
        }

        $table->render();

        if(count($unhandableErrorList))
        {
            $table = new Table($output);
            $table->setHeaders(['fileName', 'errors']);

            $output->writeln('');
            $output->writeln('unhandable Errors');
            foreach ($unhandableErrorList AS $fileName => $errorsForFile)
            {
                $index = 0;
                foreach ($errorsForFile AS $error) {
                    if($index === 0) {
                        $table->addRow([$fileName, $error]);
                    } else {
                        $table->addRow(['', $error]);
                    }
                    $index++;
                }
                $table->addRow(new TableSeparator());
            }

            $table->render();
        }
    }
}
