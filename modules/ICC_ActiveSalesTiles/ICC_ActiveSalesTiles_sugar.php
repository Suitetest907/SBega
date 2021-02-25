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

 require_once 'include/SugarObjects/templates/file/File.php'; class ICC_ActiveSalesTiles_sugar extends File { public $new_schema = true; public $module_dir = 'ICC_ActiveSalesTiles'; public $object_name = 'ICC_ActiveSalesTiles'; public $table_name = 'icc_activesalestiles'; public $importable = false; public $id; public $date_entered; public $date_modified; public $modified_user_id; public $modified_by_name; public $created_by; public $created_by_name; public $description; public $deleted; public $created_by_link; public $modified_user_link; public $commentlog; public $commentlog_link; public $locked_fields; public $locked_fields_link; public $document_name; public $filename; public $file_ext; public $file_mime_type; public $uploadfile; public $active_date; public $exp_date; public $list_priority; public $main_module; public $data_type; public $tile_icon; public $report_id; public $report; public $custom_filter; public $disable_row_level_security = true; } 