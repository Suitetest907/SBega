<?php

Sugarcrm\Sugarcrm\Console\CommandRegistry\CommandRegistry::getInstance()
    ->addCommand(new \Sugarcrm\Sugarcrm\custom\Console\Command\ICCFixVardefsCommand())
    ->addCommand(new \Sugarcrm\Sugarcrm\custom\Console\Command\ICCShowFieldUsageCommand())
;
