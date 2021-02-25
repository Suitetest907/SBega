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
        'custom/modules/RevenueLineItems/RevenueLineItems_LH.php',

        //The class the method is in.
        'RevenueLineItems_LH',

        //The method to call.
        'showImage'
    );

?>