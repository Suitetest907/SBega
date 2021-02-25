<?php
// created: 2020-07-02 16:31:58
$dictionary["icc_users_opportunities"] = array (
  'true_relationship_type' => 'many-to-many',
  'from_studio' => true,
  'relationships' => 
  array (
    'icc_users_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'id',
      'relationship_type' => 'many-to-many',
      'join_table' => 'icc_users_opportunities',
      'join_key_lhs' => 'opportunity_id',
      'join_key_rhs' => 'user_id',
    ),
  ),
  'table' => 'icc_users_opportunities',
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
    'opportunity_id' => 
    array (
      'name' => 'opportunity_id',
      'type' => 'id',
    ),
    'user_id' => 
    array (
      'name' => 'user_id',
      'type' => 'id',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_icc_users_opportunities_pk',
      'type' => 'primary',
      'fields' => 
      array (
        0 => 'id',
      ),
    ),
    1 => 
    array (
      'name' => 'idx_icc_users_opportunities_ida1_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'opportunity_id',
        1 => 'deleted',
      ),
    ),
    2 => 
    array (
      'name' => 'idx_icc_users_opportunities_idb2_deleted',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'user_id',
        1 => 'deleted',
      ),
    ),
    3 => 
    array (
      'name' => 'icc_users_opportunities_alt',
      'type' => 'alternate_key',
      'fields' => 
      array (
        0 => 'opportunity_id',
        1 => 'user_id',
      ),
    ),
  ),
);