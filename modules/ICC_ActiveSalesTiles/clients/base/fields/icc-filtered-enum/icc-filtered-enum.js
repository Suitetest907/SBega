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
({extendsFrom:'EnumField',initialize:function(options){this._super('initialize',[options]);this.model.on('change:main_module change:data_type',function(){this.loadEnumOptions(!0,function(){this.isFetchingOptions=!1;if(!this.disposed){this.render()}})},this)},_loadTemplate:function(){var type=this.type;this.type='enum';this._super('_loadTemplate');this.type=type},loadEnumOptions:function(fetch,callback,error){if(this.view.name=='record'&&!this.model.dataFetched){return}
var self=this;var _module=this.getLoadEnumOptionsModule();var _itemsKey='cache:'+_module+':'+this.name+':'+this.model.get('main_module')+':'+this.model.get('data_type')+':items';this.items=this.def.options||this.context.get(_itemsKey);fetch=fetch||!1;if(fetch||!this.items){this.isFetchingOptions=!0;var _key='request:'+_itemsKey;if(this.context.get(_key)){var request=this.context.get(_key);request.xhr.done(_.bind(function(o){if(this.items!==o){this.items=o;callback.call(this)}},this))}else{var url=app.api.buildURL(_module,'enum/'+self.name,null,{main_module:this.model.get('main_module'),data_type:this.model.get('data_type')});var request=app.api.call('read',url,null,{success:function(o){if(self.disposed){return}
if(self.items!==o){self.items=o;self.context.set(_itemsKey,self.items)}},error:function(e){if(self.disposed){return}
if(error){error(e)}
if(_.isFunction(app.api.defaultErrorHandler)){app.api.defaultErrorHandler(e)}
self.items={'':app.lang.get('LBL_NO_DATA',self.module)}},complete:function(){if(!self.disposed){self.context.unset(_key);callback.call(self)}}});this.context.set(_key,request)}}else if(_.isString(this.items)){this.items=app.lang.getAppListStrings(this.items)}},_dispose:function(){this.model.off('change:main_module change:data_type',null,this);this._super('_dispose')}})