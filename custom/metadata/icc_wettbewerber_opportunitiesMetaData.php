<?php
// created: 2020-08-12 13:44:04
$dictionary["icc_wettbewerber_opportunities"] = array (
  'from_studio' => true,
  'relationships' => 
  array (
    'icc_wettbewerber_opportunities' => 
    array (
      'lhs_module' => 'Opportunities',
      'lhs_table' => 'opportunities',
      'lhs_key' => 'id',
      'rhs_module' => 'Apach_Wettbewerber',
      'rhs_table' => 'apach_wettbewerber',
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