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
({className:'icc-activesales-dashlet',plugins:['icc-css-loader','Dashlet'],css:['modules/ICC_ActiveSalesTiles/css/icc-activesales-dashlet.css'],cacheKey:'',tilesMetaData:{},initialize:function(options){this.cacheKey='icc-as-visible-tiles-'+app.user.id;this._super('initialize',[options])},loadData:function(options){this.loadTilesMetaData(_.bind(this.loadTilesData,this),options?!0:!1);this._super('loadData',[options])},loadTilesData:function(){this.meta.panels=[{fields:this.prepareTilesMetaForView(this.tilesMetaData)}];this.render()},prepareTilesMetaForView:function(meta){var result=[];_.each(meta,function(field){result.push({name:field.id,type:'icc-active-sales-tile',meta:field})});return result},loadTilesMetaData:function(callback,force){var timestamp=app.date().formatServer(!0);if(!force&&app.cache.has(this.cacheKey)&&app.cache.get(this.cacheKey).timestamp==timestamp){this.tilesMetaData=app.cache.get(this.cacheKey).data;callback()}else{var url=app.api.buildURL('ICC_ActiveSalesTiles','my-tiles',null,{});app.api.call('read',url,null,{success:_.bind(function(data){app.cache.set(this.cacheKey,{data:data,timestamp:timestamp});this.tilesMetaData=data;callback()},this),error:function(error){app.cache.set(this.cacheKey,null);app.alert.show('loadTilesMetaData',{level:'error',title:'Error: '+error.message,autoclose:!1})}})}}})