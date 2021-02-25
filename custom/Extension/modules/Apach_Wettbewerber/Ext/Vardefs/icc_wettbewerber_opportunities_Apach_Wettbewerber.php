<?php
// created: 2020-08-12 13:44:04
$dictionary["Apach_Wettbewerber"]["fields"]["icc_opportunities"] = array (
  'name' => 'icc_opportunities',
  'type' => 'link',
  'relationship' => 'icc_wettbewerber_opportunities',
  'source' => 'non-db',
  'module' => 'Opportunities',
  'bean_name' => 'Opportunity',
  'side' => 'right',
  'vname' => 'LBL_ICC_WETTBEWERBER_OPPORTUNITIES_FROM_APACH_WETTBEWERBER_TITLE',
  'id_name' => 'icc_opportunities_id',
  'link-type' => 'one',
);
$dictionary["Apach_Wettbewerber"]["fields"]["icc_opportunities_name"] = array (
  'name' => 'icc_opportunities_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_ICC_WETTBEWERBER_OPPORTUNITIES_FROM_OPPORTUNITIES_TITLE',
  'save' => true,
  'id_name' => 'icc_opportunities_id',
  'link' => 'icc_opportunities',
  'table' => 'opportunities',
  'module' => 'Opportunities',
  'rname' => 'name',
);
$dictionary["Apach_Wettbewerber"]["fields"]["icc_opportunities_id"] = array (
  'name' => 'icc_opportunities_id',
  'type' => 'id',
  'vname' => 'LBL_ICC_WETTBEWERBER_OPPORTUNITIES_FROM_APACH_WETTBEWERBER_TITLE_ID',
  'reportable' => false,
  'side' => 'right',
  'massupdate' => false,
  'duplicate_merge' => 'disabled',
  'hideacl' => true,
);
