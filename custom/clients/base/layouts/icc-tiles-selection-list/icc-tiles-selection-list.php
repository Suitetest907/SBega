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

 $viewdefs['base']['layout']['icc-tiles-selection-list'] = array( 'components' => array( array( 'layout' => array( 'type' => 'default', 'name' => 'sidebar', 'components' => array( array( 'layout' => array( 'type' => 'base', 'name' => 'main-pane', 'css_class' => 'main-pane span8', 'components' => array( array( 'view' => 'icc-tiles-selection-headerpane', ), array( 'layout' => array( 'type' => 'filterpanel', 'availableToggles' => array(), 'filter_options' => array( 'stickiness' => false, ), 'components' => array( array( 'layout' => 'filter', 'loadModule' => 'Filters', ), array( 'view' => 'filter-rows', ), array( 'view' => 'filter-actions', ), array( 'view' => 'icc-tiles-selection-list', ), array( 'view' => 'list-bottom', ), ), ), ), ), ), ), array( 'layout' => array( 'type' => 'base', 'name' => 'preview-pane', 'css_class' => 'preview-pane', 'components' => array( array( 'layout' => 'preview', ), ), ), ), ), ), ), ), ); 