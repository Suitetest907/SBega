<?php

namespace Sugarcrm\Sugarcrm\custom\Console\Command;

use function GuzzleHttp\Psr7\str;
use Sugarcrm\Sugarcrm\Console\CommandRegistry\Mode\InstanceModeInterface;
use Sugarcrm\Sugarcrm\Console\CommandRegistry\Mode\StandaloneModeInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ICCShowFieldUsageCommand extends Command implements InstanceModeInterface
{

    protected function configure()
    {
        $this
            ->setName('icc:database:fieldUsage')
            ->addArgument('module', InputArgument::REQUIRED)
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $module = $input->getArgument('module');
        $output->writeln(sprintf('----- %s -----', $module));
        $data = [];

        $bean = \BeanFactory::newBean($module);

        $query = new \SugarQuery();
        $query->from($bean);
        $query->select("*");

        $result = $query->execute();

        $total = count($result);
        $data[$module] = [
            'total' => $total,
            'columnsFilled' => [
            ]
        ];

        $firstRow = $result[0];
        $longestLabel = 0;
        $longestRealLabel = 0;
        foreach ($firstRow AS $column => $value) {
            $plain = 0;

            foreach ($result as $row) {
                $plain += !empty($row[$column]);
            }

            $translated = translate($bean->field_defs[$column]['vname'], $module);
            $data[$module]['columnsFilled'][] = [
                'name' => $column,
                'realName' => $translated,
                'plain' => $plain,
                'percentage' => ($plain / $total) * 100,
            ];

            $longestLabel = max($longestLabel, strlen($column));
            $longestRealLabel = max($longestRealLabel, strlen($translated));
        }

        usort($data[$module]['columnsFilled'], function ($a, $b) {
            return $a['percentage'] < $b['percentage'];
        });

        foreach ($data[$module]['columnsFilled'] AS $datum) {
            $output->writeln(sprintf('%7s - %-'.$longestRealLabel.'s - %-'.$longestLabel.'s', number_format($datum['percentage'], 2).'%', $datum['realName'], $datum['name']));
        }
    }
}
