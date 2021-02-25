<?php

if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('custom/modules/DynamicFields/templates/Fields/TemplateRatingfield.php');

/**
 * Implement get_body function to correctly populate the template for the ModuleBuilder/Studio
 * Add field page.
 *
 * @param Sugar_Smarty $ss
 * @param array $vardef
 *
 */
function get_body(&$ss, $vardef)
{
    $vars = $ss->get_template_vars();
    $fields = $vars['module']->mbvardefs->vardefs['fields'];
    $fieldOptions = array();
    foreach ($fields as $id => $def) {
        $fieldOptions[$id] = $def['name'];
    }
    $ss->assign('fieldOpts', $fieldOptions);

    if (isset($vardef['color']) && !empty($vardef['color'])) {
        $color = $vardef['color'];
    } else {
        $color = '#ffd203';
    }

    $ss->assign('COLOR', $color);


    return $ss->fetch('custom/modules/DynamicFields/templates/Fields/Forms/Rating.tpl');
}
?>