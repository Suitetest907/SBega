<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class inboundEmailAssignment
{
    // to link inbound email with the suited oppotunities/projects
    function iccEmailAssignment($bean, $event, $arguments)
    {
        if($bean->type == 'inbound' && empty($bean->parent_type) && empty($arguments['isUpdate']))
        {   
            global $db;
            $name = $bean->name;
            // to get project number from email subject, we get the number from format #<number>#
            $re = '/#([0-9]+)#/m';
            preg_match_all($re, $name, $matches, PREG_SET_ORDER, 0);
            $last_match = end($matches);
            $project_number = $last_match[1] ?? '';
            
            // if project number is empty return                   
            if(empty($project_number)) {
                return;
            }

            // if we have the project number, we will fetch the Opportunity, and attach email with it
            $q = new SugarQuery();
            $q->select()->fieldRaw('o.id as opp_id');
            $q->from(BeanFactory::newBean('Opportunities'), array('alias' => 'o'));
            $q->where()->equals('o.icc_project_number', $project_number);
            
            foreach ($q->execute() as $row) {
                $link = "opportunities";
                if ($bean->load_relationship($link)) {
                    $bean->$link->add($row['opp_id']);
                }
                $update_sql = 'UPDATE emails SET parent_type =?, parent_id=? where deleted =? AND id=?';
                $conn = $db->getConnection();
                $conn->executeQuery($update_sql, array('Opportunities', $row['opp_id'], '0', $bean->id));
            }
        }
    }

    // to append project number into the outgoing email subject
    function setOutBoundEmailSubject($bean, $event, $arguments)
    {
        if($bean->parent_type == "Opportunities" && empty($arguments['isUpdate']))
        {
            $q = new SugarQuery();
            $q->from(BeanFactory::newBean('Opportunities'));
            $q->select('icc_project_number');
            $q->where()->equals('id',$bean->parent_id);
            $res = $q->execute();
            if(!empty($res[0]['icc_project_number'])){
                $bean->name = $bean->name." - #".$res[0]['icc_project_number']."#";
            }
        }
    }
}
