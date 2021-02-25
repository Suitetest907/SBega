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
({css:['modules/ICC_ActiveSalesTiles/css/icc-active-sales-fields.css'],events:{'click i.fa-times':'cleanColor',},initialize:function(options){this.plugins=_.union(this.plugins||[],['icc-css-loader']);this._super('initialize',[options]);this.model.addValidationTask(this.name+'_'+this.cid,_.bind(this._doValidateColor,this));this.on('render',this.initializeColorPicker,this);this.model.on('change:'+this.name,this.setColorPicker,this)},cleanColor:function(){this.model.set(this.name,'')},setColorPicker:function(){this.render()},initializeColorPicker:function(){var self=this;_.each(this.$(this.fieldTag),function(obj,key){$(obj).blur(function(){$(this).parent().css('backgroundColor',$(this).val());self.model.set(self.name,self.unformat($(this).val()))})},this);this.$(this.fieldTag).colorpicker()},_doValidateColor:function(fields,errors,callback){var regEx=new RegExp("^((0x){0,1}|#{0,1})([0-9A-Fa-f]{8}|[0-9A-Fa-f]{6})$");if(this.model.get(this.name)&&!regEx.test(this.model.get(this.name))){errors[this.name]=errors[this.name]||{};errors[this.name].number=!0}
callback(null,fields,errors)},bindDomChange:function(){},unbindDom:function(){this.$(this.fieldTag).off();this.$(this.fieldTag).data('colorpicker',null);this._super('unbindDom',[])},_dispose:function(){this.model.removeValidationTask(this.name+'_'+this.cid);this._super('_dispose')},})