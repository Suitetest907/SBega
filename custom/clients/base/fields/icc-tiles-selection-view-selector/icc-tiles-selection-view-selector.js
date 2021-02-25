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
({extendsFrom:'EnumField',initialize:function(options){this._super('initialize',[options]);this.model.on('change:main_module',this.loadEnumOptions,this);this.type='enum'},loadEnumOptions:function(){this.items={'':app.lang.getAppString('LBL_PANEL_DEFAULT')};var views=app.metadata.getLayout(this.model.get('main_module'));_.each(views,function(view,viewName){if(view.meta&&(view.meta.type=='icc-tiles-selection-list'||view.meta.template=='icc-tiles-selection-list')&&viewName!='icc-tiles-selection-list'){this.items[viewName]=viewName}},this);if(!this.items[this.model.get(this.name)]){this.model.set(this.name,'')}},_dispose:function(){this.model.off('change:main_module',this.loadEnumOptions,this);this._super('_dispose')},})