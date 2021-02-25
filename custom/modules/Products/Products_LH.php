<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

class Products_LH
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

    /**
     * Create a relation of Quote with Wettbewerber if it's already linked to Product
     *
     * @param  type $bean  Product Bean object
     * @param  type $event Event string, in this case after_save
     * @param  type $args  Additional arguments
     * @return void
     */
    public function createQuoteWettbewerberRelation($bean, $event, $args)
    {
        if (!empty($bean->icc_apach_wettbewerber_id)
                && empty($args['dataChanges']['icc_apach_wettbewerber_id']['before'])) {
            // Create a relation with the quote
            $quote_obj = BeanFactory::getBean('Quotes', $bean->quote_id);
            $quote_obj->load_relationship('icc_apach_wettbewerber');
            $quote_obj->icc_apach_wettbewerber->add($bean->icc_apach_wettbewerber_id);
            $quote_obj->save();
        }

        if (empty($bean->icc_apach_wettbewerber_id)
                && !empty($args['dataChanges']['icc_apach_wettbewerber_id']['before'])) {
            // Create a relation with the quote
            $quote_obj = BeanFactory::getBean('Quotes', $bean->quote_id);
            $quote_obj->load_relationship('icc_apach_wettbewerber');
            $quote_obj->icc_apach_wettbewerber->delete($bean->icc_apach_wettbewerber_id);
            $quote_obj->save();
        }
    }
}
