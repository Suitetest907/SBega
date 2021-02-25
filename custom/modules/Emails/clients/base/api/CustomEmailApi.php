<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once("clients/base/api/PingApi.php");

class CustomEmailApi extends ModuleApi
{
    public function registerApiRest()
    {
        return array(
            'getEmailRecord' => array(
                'reqType' => 'GET',
                'path' => array('Emails', '?'),
                'pathVars' => array('module', 'record'),
                'method' => 'retrieveRecord',
                'shortHelp' => 'Returns a single record',
                'longHelp' => 'include/api/help/module_record_get_help.html',
            ),
        );
    }

    /**
     * @override
     * Get the email record and mark it as read if it's being read for the first time
     *
     * @param  ServiceBase $api  API Class
     * @param  array       $args Different properties or posted parameters
     * @return array             Email record data
     */
    public function retrieveRecord(ServiceBase $api, array $args)
    {
        $data = parent::retrieveRecord($api, $args);
        $GLOBALS['log']->fatal("\n".__file__.": ".__function__."(): ".__line__."\nthis->bean->status: ".print_r($this->bean->status, 1)."\nargs: ".print_r($args, 1)."\n");
        if ($args['view'] == 'preview' && $this->bean->status == 'unread') {
            // Set bean status to read
            $this->bean->status = 'read';
            $this->bean->save();
        }

        return $data;
    }

    /**
     * @override
     * @inheritDoc
     */
    protected function loadBean(ServiceBase $api, array $args, $aclToCheck = 'view', array $options = array())
    {
        $this->bean = parent::loadBean($api, $args, $aclToCheck, $options);

        return $this->bean;
    }
}
