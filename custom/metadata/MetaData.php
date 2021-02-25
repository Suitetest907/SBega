<?php
// created: 2020-07-02 16:08:15
$dictionary[""] = array (
  'from_studio' => true,
  'relationships' => 
  array (
    '' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Users',
      'rhs_table' => 'users',
      'rhs_key' => 'icc_opportunities_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_icc_opportunities_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'icc_opportunities_id',
        1 => 'deleted',
      ),
    ),
  ),
);