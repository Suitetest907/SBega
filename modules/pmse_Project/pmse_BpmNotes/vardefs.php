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

$dictionary['pmse_BpmNotes'] = array(
    'table' => 'pmse_bpm_notes',
    'audited' => false,
    'activity_enabled' => false,
    'duplicate_merge' => true,
    'reassignable' => false,
    'fields' => array(
        'cas_id' => array(
            'required' => true,
            'name' => 'cas_id',
            'vname' => 'Unique Identifier for this Case',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '36',
            'size' => '36',
        ),
        'cas_index' => array(
            'required' => true,
            'name' => 'cas_index',
            'vname' => 'Case flow index a sequential number relative to each case',
            'type' => 'int',
            'massupdate' => false,
            'default' => null,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '4',
            'size' => '20',
            'enable_range_search' => false,
            'disable_num_format' => '',
            'min' => false,
            'max' => false,
        ),
        'not_user_id' => array(
            'required' => true,
            'name' => 'not_user_id',
            'vname' => 'User Identifier for who wrote this note',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '40',
            'size' => '40',
        ),
        'not_user_recipient_id' => array(
            'required' => true,
            'name' => 'not_user_recipient_id',
            'vname' => 'User Identifier for recipient this note',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '40',
            'size' => '40',
        ),
        'not_type' => array(
            'required' => true,
            'name' => 'not_type',
            'vname' => 'Note type',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => 'GENERAL',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '32',
            'size' => '32',
        ),
        'not_date' => array(
            'required' => false,
            'name' => 'not_date',
            'vname' => 'when the note was was sent',
            'type' => 'datetimecombo',
            'massupdate' => true,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'enable_range_search' => false,
            'dbType' => 'datetime',
        ),
        'not_status' => array(
            'required' => true,
            'name' => 'not_status',
            'vname' => 'Thread status',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => 'ACTIVE',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '10',
            'size' => '10',
        ),
        'not_availability' => array(
            'required' => true,
            'name' => 'not_availability',
            'vname' => 'Thread status',
            'type' => 'varchar',
            'massupdate' => false,
            'default' => '',
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'len' => '32',
            'size' => '32',
        ),
        'not_content' => array(
            'required' => true,
            'name' => 'not_content',
            'vname' => 'Case flow index',
            'type' => 'text',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ),
        'not_recipients' => array(
            'required' => true,
            'name' => 'not_recipients',
            'vname' => 'tokens evaluated in this thread',
            'type' => 'text',
            'massupdate' => false,
            'no_default' => false,
            'comments' => '',
            'help' => '',
            'importable' => 'true',
            'duplicate_merge' => 'disabled',
            'duplicate_merge_dom_value' => '0',
            'audited' => false,
            'reportable' => true,
            'unified_search' => false,
            'merge_filter' => 'disabled',
            'calculated' => false,
            'size' => '20',
            'rows' => '4',
            'cols' => '20',
        ),
    ),
    'relationships' => array(),
    'optimistic_locking' => true,
    'unified_search' => true,
    'ignore_templates' => array(
        'taggable',
        'lockable_fields',
        'commentlog',
    ),
    'portal_visibility' => [
        'class' => 'PMSE',
    ],
    'uses' => array(
        'basic',
        'assignable',
    ),
);

VardefManager::createVardef('pmse_BpmNotes', 'pmse_BpmNotes');
