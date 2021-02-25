<?php

    $hook_array['after_save'][] = Array(
        1,
        'To build link between inbound emails and opportunities',
        'custom/modules/Emails/inboundEmailAssignment.php',
        'inboundEmailAssignment',
        'iccEmailAssignment'
    );

    $hook_array['before_save'][] = Array(
        1,
        'To set project number in outgoing email subject',
        'custom/modules/Emails/inboundEmailAssignment.php',
        'inboundEmailAssignment',
        'setOutBoundEmailSubject'
    );
