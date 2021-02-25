<?php

$dictionary['Product']['fields']['icc_apach_wettbewerber_name'] = array(
  'name' => 'icc_apach_wettbewerber_name',
  'rname' => 'name',
  'id_name' => 'icc_apach_wettbewerber_id',
  'vname' => 'LBL_ICC_APACH_WETTBEWERBER_NAME',
  'type' => 'relate',
  'link' => 'icc_apach_wettbewerber',
  'module' => 'Apach_Wettbewerber',
  'dbType' => 'varchar',
  'len' => 255,
  'source' => 'non-db',
  'unified_search' => true,
  'comment' => '',
  'required' => false,
);

$dictionary['Product']['fields']['icc_apach_wettbewerber_id'] = array(
  'name' => 'icc_apach_wettbewerber_id',
  'type' => 'relate',
  'dbType' => 'id',
  'rname' => 'id',
  'module' => 'Apach_Wettbewerber',
  'id_name' => 'icc_apach_wettbewerber_id',
  'reportable' => false,
  'vname' => 'LBL_ICC_APACH_WETTBEWERBER_ID',
  'audited' => true,
  'massupdate' => false,
  'comment' => '',
);

$dictionary['Product']['fields']['icc_apach_wettbewerber'] = array(
  'name' => 'icc_apach_wettbewerber',
  'type' => 'link',
  'relationship' => 'icc_apach_wettbewerber_products',
  'source' => 'non-db',
  'module' => 'Apach_Wettbewerber',
  'bean_name' => 'Apach_Wettbewerber',
  'vname' => 'LBL_ICC_WETTBEWERBER_QUOTES_FROM_QUOTES_TITLE',
  'id_name' => 'id',
  'link-type' => 'many',
  'side' => 'left',
);

$dictionary['Product']['relationships']['icc_apach_wettbewerber_products'] = array(
  'lhs_module' => 'Apach_Wettbewerber',
  'lhs_table' => 'apach_wettbewerber',
  'lhs_key' => 'id',
  'rhs_module' => 'Products',
  'rhs_table' => 'products',
  'rhs_key' => 'icc_apach_wettbewerber_id',
  'relationship_type' => 'one-to-many',
);
