<?php
/** The contents of this file are subject to the Insignio CRM Subscription
* Agreement ("License").
* By installing or using this file, You have unconditionally agreed to the
* terms and conditions of the License, and You may not use this file except in
* compliance with the License.  Under the terms of the license, You shall not,
* among other things: 1) sublicense, resell, rent, lease, redistribute, assign
* or otherwise transfer Your rights to the Software, and 2) use the Software
* for timesharing or service bureau purposes such as hosting the Software for
* commercial gain and/or for the benefit of a third party.  Use of the Software
* may be subject to applicable fees and any use of the Software without first
* paying applicable fees is strictly prohibited.  You do not have the right to
* remove Insignio CRM copyrights from the source code or user interface.
*
* Your Warranty, Limitations of liability and Indemnity are expressly stated
* in the License.  Please refer to the License for the specific language
* governing these rights and limitations under the License.  Portions created
* by Insignio CRM are Copyright (C) 2019 Insignio CRM GmbH. All Rights Reserved.*/

require_once "modules/Reports/Report.php"; class ICCReport extends Report { public function getReportSubQuery() { $this->create_where(); $this->create_from(); $id = $this->focus->table_name . '.id'; $where = $this->getRecordWhere(); $query = "SELECT  $id {$this->from} WHERE $where"; $query = str_replace("\n", " ", $query); return $query; } private function getRecordWhere() { $where = " " . $this->focus->table_name . ".deleted=0 \n"; $options = $this->getVisibilityOptions(); $options['action'] = 'list'; $where = $this->focus->addVisibilityWhere($where, $options); if (!empty($this->where)) { $where = " ($this->where) AND $where"; } return $where; } private function getVisibilityOptions() { $options = $this->visibilityOpts; if ($this->focus->db->supports('fix:report_as_condition')) { $options['as_condition'] = true; } return $options; } }