<?php

require_once("clients/base/api/RelatedActivitiesApi.php");

class CustomRelatedActivitiesApi extends RelatedActivitiesApi
{

    public function runQuery(ServiceBase $api, array $args, SugarQuery $q, array $options, SugarBean $seed = null)
    {
        $this->fetchInboxEmails($q, $api , $args);
        return parent::runQuery( $api,  $args, $q, $options, $seed );
    }
    
    /**
     * To fetch emails from inbox 
     * @query SugarQuery
     */
    function fetchInboxEmails($query, $api , $args)
    {
        list(, $sub_query) = $this->filterRelatedSetup($api, $args);
        $sub_query->select->selectReset();
        $sub_query->limit = null;
        $sub_query->orderByReset();
        $sub_query->select()->fieldRaw('distinct e2.id');
        $sub_query->joinTable('emails', array('alias' => 'e2'))->on()->addRaw("( (e2.name like concat('Re:%', emails.name) OR e2.name like concat('Aw:%', emails.name)) AND e2.deleted = 0 )");
        $q = new SugarQuery();
        $q->from(BeanFactory::newBean('Emails'));
        $q->select()->fieldRaw("emails.assigned_user_id, jt0_assigned_user_link.first_name rel_assigned_user_name_first_name, jt0_assigned_user_link.last_name rel_assigned_user_name_last_name, jt0_assigned_user_link.created_by assigned_user_name_owner, emails.date_entered, emails.date_modified, '' email_description, emails.name, emails.date_sent record_dat43b7record_date, emails.status, emails.id, 'Emails' module");
        $q->joinTable('users', array('joinType' => 'left','alias' => 'jt0_assigned_user_link'))->on()
            ->equalsField('emails.assigned_user_id' , 'jt0_assigned_user_link.id')
            ->equals('jt0_assigned_user_link.deleted',0);
        $q->where()->equals('emails.type','inbound');
        $q->where()->in("emails.id",$sub_query );
        $q->limit = $q->offset = null;
        $q->orderByReset();
        // to get union of 2 queries
        $query->union($q);
    }
}
