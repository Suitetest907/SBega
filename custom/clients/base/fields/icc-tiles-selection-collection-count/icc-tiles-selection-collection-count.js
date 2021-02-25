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
({extendsFrom:'CollectionCountField',fetchCount:function(){if(_.isNull(this.collection.total)){app.alert.show('fetch_count',{level:'process',title:app.lang.get('LBL_LOADING'),autoClose:!1})}
var tileDefs=this.context.get('tileDefs');var url=app.api.buildURL('ICC_ActiveSalesTiles',tileDefs.id+'/icc-tile-selection/'+tileDefs.main_module+'/count',null,{});app.api.call('read',url,null,{success:_.bind(function(data){if(!this.disposed){this.collection.total=data.record_count;this.updateCount()}},this),error:_.bind(function(error){app.alert.show('fetch_count',{level:'error',title:'Error: '+error.message,autoclose:!1})},this),complete:function(){app.alert.dismiss('fetch_count')}})},})