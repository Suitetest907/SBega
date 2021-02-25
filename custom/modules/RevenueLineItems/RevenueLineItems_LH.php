<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class RevenueLineItems_LH
{
    function showImage($bean, $event, $arguments)
    {
        if(!isset($arguments['dataChanges']) || (isset($arguments['dataChanges']['product_template_id']) && $arguments['dataChanges']['product_template_id']['before'] != $arguments['dataChanges']['product_template_id']['after'])) {
            if (!isset($bean->ignore_update_c) || $bean->ignore_update_c === false)
            {
                $product_template = \BeanFactory::getBean('ProductTemplates', $bean->product_template_id);
                if (!empty($product_template->id)) {
                    $bean->ignore_update_c = true;
                    $bean->icc_product_image = $product_template->icc_product_image;
                    $bean->save();
                }
            }
        }
    }
}
