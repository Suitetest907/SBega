<?php
// created: 2020-08-12 13:59:23
$dictionary["Apach_Wettbewerber"]["fields"]["icc_quotes"] = array (
  'name' => 'icc_quotes',
  'type' => 'link',
  'relationship' => 'icc_wettbewerber_quotes',
  'source' => 'non-db',
  'module' => 'Quotes',
  'bean_name' => 'Quote',
  'side' => 'right',
  'vname' => 'LBL_ICC_WETTBEWERBER_QUOTES_FROM_APACH_WETTBEWERBER_TITLE',
  'id_name' => 'icc_quotes_id',
  'link-type' => 'one',
);
$dictionary["Apach_Wettbewerber"]["fields"]["icc_quotes_name"] = array (
  'name' => 'icc_quotes_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ICC_WETTBEWERBER_QUOTES_FROM_QUOTES_TITLE',
  'save' => true,
  'id_name' => 'icc_quotes_id',
  'link' => 'icc_quotes',
  'table' => 'quotes',
  'module' => 'Quotes',
  'rname' => 'name',
);
$dictionary["Apach_Wettbewerber"]["fields"]["icc_quotes_id"] = array (
  'name' => 'icc_quotes_id',
  'type' => 'id',
  'vname' => 'LBL_ICC_WETTBEWERBER_QUOTES_FROM_APACH_WETTBEWERBER_TITLE_ID',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
