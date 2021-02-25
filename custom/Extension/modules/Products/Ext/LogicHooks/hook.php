<?php

    $hook_version = 1;
    $hook_array = Array();
    $hook_array['after_save'] = Array();
    $hook_array['after_save'][] = Array(
        //Processing index. For sorting the array.
        1,

        //Label. A string value to identify the hook.
        'To show image afters save',

        //The PHP file where your class is located.
        'custom/modules/Products/Products_LH.php',

        //The class the method is in.
        'Products_LH',

        //The method to call.
        'showImage'
    );

    $hook_array['after_save'][] = Array(
        //Processing index. For sorting the array.
        count($hook_array['after_save']),

        //Label. A string value to identify the hook.
        'To create relation of Competitor with Quote',

        //The PHP file where your class is located.
        'custom/modules/Products/Products_LH.php',

        //The class the method is in.
        'Products_LH',

        //The method to call.
        'createQuoteWettbewerberRelation'
    );

?>