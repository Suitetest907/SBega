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

 $viewdefs['ICC_ActiveSalesTiles']['base']['filter']['basic'] = [ 'create' => true, 'quicksearch_field' => ['name'], 'quicksearch_priority' => 1, 'quicksearch_split_terms' => false, 'filters' => [ [ 'id' => 'all_records', 'name' => 'LBL_LISTVIEW_FILTER_ALL', 'filter_definition' => [], 'editable' => false ], [ 'id' => 'assigned_to_me', 'name' => 'LBL_ASSIGNED_TO_ME', 'filter_definition' => [ '$owner' => '', ], 'editable' => false ], [ 'id' => 'favorites', 'name' => 'LBL_FAVORITES', 'filter_definition' => [ '$favorite' => '', ], 'editable' => false ], [ 'id' => 'recently_viewed', 'name' => 'LBL_RECENTLY_VIEWED', 'filter_definition' => [ '$tracker' => '-7 DAY', ], 'editable' => false ], [ 'id' => 'recently_created', 'name' => 'LBL_NEW_RECORDS', 'filter_definition' => [ 'date_entered' => [ '$dateRange' => 'last_7_days', ], ], 'editable' => false ], ], ]; 