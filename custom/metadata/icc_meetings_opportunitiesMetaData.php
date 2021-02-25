<?php
// created: 2020-08-05 16:01:23
$dictionary["icc_meetings_opportunities"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'icc_meetings_opportunities' => 
    array (
      'lhs_module' => 'Meetings',
      'lhs_table' => 'meetings',
      'lhs_key' => 'id',
      'rhs_module' => 'Opportunities',
      'rhs_table' => 'opportunities',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'icc_meetings_opportunities',
      'join_key_lhs' => 'meeting_id',
      'join_key_rhs' => 'opportunity_id',
    ),
  ),
  'table' => 'icc_meetings_opportunities',
  'fields' => 
  array (
    'id' => 
    array (
      'name' => 'id',
      'type' => 'id',
    ),
    'date_modified' => 
    array (
      'name' => 'date_modified',
      'type' => 'datetime',
    ),
    'deleted' => 
    array (
      'name' => 'deleted',
      'type' => 'bool',
      'default' => 0,
    ),
    'meeting_id' => 
    array (
      'name' => 'meeting_id',
      'type' => 'id',
    ),
    'opportunity_id' => 
    array (
      'name' => 'opportunity_id',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_icc_meetings_opportunities_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_icc_meetings_opportunities_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'meeting_id',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_icc_meetings_opportunities_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunity_id',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'icc_meetings_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'meeting_id',
        1 => 'opportunity_id',
      ),
    ),
  ),
);