<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */

$viewdefs['base']['view']['activity-timeline'] = [
    'dashlets' => [
        [
            'label' => 'LBL_ACTIVITY_TIMELINE_DASHLET',
            'description' => 'LBL_ACTIVITY_TIMELINE_DASHLET_DESCRIPTION',
            'config' => [],
            'preview' => [],
            'filter' => [
                'view' => 'record',
                'module' => [
                    'Accounts',
                    'Cases',
                    'Leads',
                    'Opportunities',
                ],
            ],
        ],
    ],
    'custom_toolbar' => [
        'buttons' => [
            [
                'type' => 'actiondropdown',
                'no_default_action' => true,
                'icon' => 'fa-plus',
                'buttons' => [
                    [
                        'type' => 'dashletaction',
                        'action' => 'composeEmail',
                        'params' => [
                            'link' => 'emails',
                            'module' => 'Emails',
                        ],
                        'label' => 'LBL_COMPOSE_EMAIL_BUTTON_LABEL',
                        'icon' => 'fa-plus',
                        'acl_action' => 'create',
                        'acl_module' => 'Emails',
                    ],
                ],
            ],
            [
                'type' => 'dashletaction',
                'css_class' => 'dashlet-toggle btn btn-invisible minify',
                'icon' => 'fa-chevron-up',
                'action' => 'toggleMinify',
                'tooltip' => 'LBL_DASHLET_MINIMIZE',
            ],
            [
                'dropdown_buttons' => [
                    [
                        'type' => 'dashletaction',
                        'action' => 'editClicked',
                        'label' => 'LBL_DASHLET_CONFIG_EDIT_LABEL',
                    ],
                    [
                        'type' => 'dashletaction',
                        'action' => 'reloadData',
                        'label' => 'LBL_DASHLET_REFRESH_LABEL',
                    ],
                    [
                        'type' => 'dashletaction',
                        'action' => 'removeClicked',
                        'label' => 'LBL_DASHLET_REMOVE_LABEL',
                        'name' => 'remove_button',
                        'disallowed_layouts' => ['row-model-data'],
                    ],
                ],
            ],
        ],
    ],
];
