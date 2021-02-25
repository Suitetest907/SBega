<?php
// created: 2020-08-12 13:59:23
$dictionary["icc_wettbewerber_quotes"] = array (
  'from_studio' => true,
  'relationships' => 
  array (
    'icc_wettbewerber_quotes' => 
    array (
      'lhs_module' => 'Quotes',
      'lhs_table' => 'quotes',
      'lhs_key' => 'id',
      'rhs_module' => 'Apach_Wettbewerber',
      'rhs_table' => 'apach_wettbewerber',
      'rhs_key' => 'icc_quotes_id',
      'relationship_type' => 'one-to-many',
    ),
  ),
  'indices' => 
  array (
    0 => 
    array (
      'name' => 'idx_icc_quotes_id',
      'type' => 'index',
      'fields' => 
      array (
        0 => 'icc_quotes_id',
        1 => 'deleted',
      ),
    ),
  ),
);