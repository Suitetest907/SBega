<?php

require_once('include/SugarFields/Fields/Base/SugarFieldBase.php');
require_once('data/SugarBean.php');

class SugarFieldRatingfield extends SugarFieldBase
{
    public function save(&$bean, $params, $field, $properties, $prefix = '')
    {
        parent::save($bean, $params, $field, $properties, $prefix);
    }
}
?>