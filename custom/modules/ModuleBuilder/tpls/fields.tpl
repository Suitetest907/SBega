{*
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
*}


<div id='studiofields'>
<input type='button' name='addfieldbtn' value='{$mod_strings.LBL_BTN_ADDFIELD}' class='button' onclick='ModuleBuilder.moduleLoadField("");'>&nbsp;
{if $editLabelsMb=='1'}
<input type='button' name='addfieldbtn' value='{$mod_strings.LBL_BTN_EDLABELS}' class='button' onclick='ModuleBuilder.moduleLoadLabels("mb");'>
{else}
<input type='button' name='addfieldbtn' value='{$mod_strings.LBL_BTN_EDLABELS}' class='button' onclick='ModuleBuilder.moduleLoadLabels("studio");'>
{/if}
</div>

<br>

<div id="field_table"></div>
{if $studio}
    <div>{sugar_translate label='LBL_CUSTOM_FIELDS' module='ModuleBuilder'}</div>
    <div>{sugar_translate label='LBL_ICC_STUDIO_PLUS_FIELD' module='ModuleBuilder'}</div>
    <div>{sugar_translate label='LBL_ICC_LOCKED_FIELDS' module='ModuleBuilder'}</div>
{/if}

<script type="text/javascript">

var customFieldsData = {$customFieldsData};
var studioPlusFields = {$studioPlusFields};
var currentModule = "{$current_module}";

{literal}
//create sortName function to apply custom sorting for the name column which contains HTML
var sortName = function(a, b, desc)
{
    var comp = YAHOO.util.Sort.compare;
    var aString = a.getData('name').replace(/<[^>]*>/g, "");
    var bString = b.getData('name').replace(/<[^>]*>/g, "");
    return comp(aString, bString, desc);
};

var editFieldFormatter = function(elCell, oRecord, oColumn, oData)
{
    var label = customFieldsData[oData] ? '* ' + oData : oData;
  label = (studioPlusFields[oData] ? '** ' + label : label);

    var color = '';
    var fieldDefs = parent.SUGAR.App.metadata.getModule(currentModule).fields[oData] || {};
    if(fieldDefs['icc_studio_locked']) {
        color = 'color: #bb0000';
    }

  elCell.innerHTML = "<a class='mbLBLL' style='" + color + "' href='javascript:void(0)' id='" + oData + "'>" + label + "</a>";
};

var labelFormatter = function(elCell, oRecord, oColumn, oData)
{
    if (oData)
        elCell.innerHTML = oData.replace(/\:\s*?$/, '');
};

var myColumnDefs = [
    {key:"name", label:SUGAR.language.get("ModuleBuilder", "LBL_NAME"),sortable:true, resizeable:true, formatter:"editFieldFormatter", width:150, sortOptions:{sortFunction:sortName, defaultDir:YAHOO.widget.DataTable.CLASS_ASC}},
    {key:"label", label:SUGAR.language.get("ModuleBuilder", "LBL_DROPDOWN_ITEM_LABEL"),sortable:true, resizeable:true, formatter:"labelFormatter", width:200},
    {key:"type", label:SUGAR.language.get("ModuleBuilder", "LBL_DATA_TYPE"),sortable:true,resizeable:true, width:125}
];
{/literal}

var myDataSource = new YAHOO.util.DataSource({$fieldsData});
myDataSource.responseType = YAHOO.util.DataSource.TYPE_JSARRAY;
{literal}
myDataSource.responseSchema = {fields: ["label","name","type"]};
YAHOO.widget.DataTable.Formatter.editFieldFormatter = editFieldFormatter;
YAHOO.widget.DataTable.Formatter.labelFormatter = labelFormatter;

var fieldsTable = new YAHOO.widget.ScrollingDataTable("field_table", myColumnDefs, myDataSource);

fieldsTable.doBeforeSortColumn = function(column, sortDirection)
{
    var url = 'index.php?module=ModuleBuilder&action=savetablesort&column=' + column.getKey() + '&direction=' + sortDirection;
    YUI({comboBase:'index.php?entryPoint=getYUIComboFile&'}).use('io', function (Y) {
        Y.io(url, {
            method: 'POST',
            on: {
                success: function(id, data) {},
                failure: function(id, data) {}
            }
        });
    });
    return true;
};


fieldsTable.subscribe("rowMouseoverEvent", fieldsTable.onEventHighlightRow);
fieldsTable.subscribe("rowMouseoutEvent", fieldsTable.onEventUnhighlightRow);
fieldsTable.subscribe("rowClickEvent", function(args) {
    var field = this.getRecord(args.target).getData();
    var fieldDefs = parent.SUGAR.App.metadata.getModule(currentModule).fields[field.name] || {};
    if(fieldDefs['icc_studio_locked'] && fieldDefs['icc_studio_locked'] === true) {
        return;
    }

    ModuleBuilder.moduleLoadField(field.name);
});

fieldsTable.render("#field_table");
{/literal}

{if !empty($sortPreferences)}
pref = {$sortPreferences};
sortDirection = (pref.direction == 'ASC') ? YAHOO.widget.DataTable.CLASS_ASC : YAHOO.widget.DataTable.CLASS_DESC;
fieldsTable.sortColumn(fieldsTable.getColumn(pref.key), sortDirection);
{/if}

ModuleBuilder.module = '{$module->name}';
ModuleBuilder.MBpackage = '{$package->name}';
ModuleBuilder.helpRegisterByID('studiofields', 'input');
{if $package->name != 'studio'}
ModuleBuilder.helpSetup('fieldsEditor','mbDefault');
{else}
ModuleBuilder.helpSetup('fieldsEditor','default');
{/if}
</script>

<style>
{literal}
a.mbLBLL {
	text-decoration:none;
	font-weight:normal;
	color:black;
}

#field_table {
    text-align:left;
}
{/literal}
</style>
