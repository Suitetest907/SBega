<?php
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

$mod_strings = array (
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',

    //END DON'T CONVERT

    // Dashboard Names
    'LBL_LEADS_LIST_DASHBOARD' => '潛在客户清單儀表板',
    'LBL_LEADS_RECORD_DASHBOARD' => '潛在客戶紀錄儀表板',

    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除潛在客戶。',
    'LBL_ACCOUNT_DESCRIPTION'=> '帳戶描述',
    'LBL_ACCOUNT_ID'=>'帳戶 ID',
    'LBL_ACCOUNT_NAME' => '帳戶名稱：',
    'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'活動',
    'LBL_ADD_BUSINESSCARD' => '新增名片',
    'LBL_ADDRESS_INFORMATION' => '地址資訊',
    'LBL_ALT_ADDRESS_CITY' => '替代地址城市',
    'LBL_ALT_ADDRESS_COUNTRY' => '替代地址國家',
    'LBL_ALT_ADDRESS_POSTALCODE' => '替代地址郵遞區號',
    'LBL_ALT_ADDRESS_STATE' => '替代地址省',
    'LBL_ALT_ADDRESS_STREET_2' => '替代地址街道 2',
    'LBL_ALT_ADDRESS_STREET_3' => '替代地址街道 3',
    'LBL_ALT_ADDRESS_STREET' => '替代地址街道',
    'LBL_ALTERNATE_ADDRESS' => '其他地址：',
    'LBL_ANY_ADDRESS' => '任何地址：',
    'LBL_ANY_EMAIL' => '電子郵件：',
    'LBL_ANY_PHONE' => '任何電話：',
    'LBL_ASSIGNED_TO_NAME' => '已指派至',
    'LBL_ASSIGNED_TO_ID' => '指派的使用者：',
    'LBL_BACKTOLEADS' => '返回至潛在客戶',
    'LBL_BUSINESSCARD' => '轉換潛在客戶',
    'LBL_CITY' => '城市：',
    'LBL_CONTACT_ID' => '連絡人 ID',
    'LBL_CONTACT_INFORMATION' => '概觀',
    'LBL_CONTACT_NAME' => '潛在客戶名稱：',
    'LBL_CONTACT_OPP_FORM_TITLE' => '潛在客戶－商機：',
    'LBL_CONTACT_ROLE' => '角色：',
    'LBL_CONTACT' => '潛在客戶：',
    'LBL_CONVERT_BUTTON_LABEL' => '轉換',
    'LBL_SAVE_CONVERT_BUTTON_LABEL' => '儲存和轉換',
    'LBL_CONVERT_PANEL_OPTIONAL' => '（可選）',
    'LBL_CONVERT_ACCESS_DENIED' => '您缺少轉換潛在客戶所需模組的編輯權限：{{requiredModulesMissing}}',
    'LBL_CONVERT_FINDING_DUPLICATES' => '搜尋重複項...',
    'LBL_CONVERT_IGNORE_DUPLICATES' => '忽略並建立新',
    'LBL_CONVERT_BACK_TO_DUPLICATES' => '返回重複項',
    'LBL_CONVERT_SWITCH_TO_CREATE' => '建立新',
    'LBL_CONVERT_SWITCH_TO_SEARCH' => '搜尋',
    'LBL_CONVERT_DUPLICATES_FOUND' => '發現 {{duplicateCount}} 個重複項',
    'LBL_CONVERT_CREATE_NEW' => '新 {{moduleName}}',
    'LBL_CONVERT_SELECT_MODULE' => '選取 {{moduleName}}',
    'LBL_CONVERT_SELECTED_MODULE' => '正在選取 {{moduleName}}',
    'LBL_CONVERT_CREATE_MODULE' => '建立 {{moduleName}}',
    'LBL_CONVERT_CREATED_MODULE' => '正在建立 {{moduleName}}',
    'LBL_CONVERT_RESET_PANEL' => '重設',
    'LBL_CONVERT_COPY_RELATED_ACTIVITIES' => '複製關聯活動至',
    'LBL_CONVERT_MOVE_RELATED_ACTIVITIES' => '移動關聯活動至',
    'LBL_CONVERT_MOVE_ACTIVITIES_TO_CONTACT' => '移動關聯活動至連絡人記錄',
    'LBL_CONVERTED_ACCOUNT'=>'已轉換帳戶：',
    'LBL_CONVERTED_CONTACT' => '已轉換連絡人：',
    'LBL_CONVERTED_OPP'=>'已轉換商機：',
    'LBL_CONVERTED'=> '已轉換',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => '轉換潛在客戶',
    'LBL_CONVERTLEAD' => '轉換潛在客戶',
    'LBL_CONVERTLEAD_WARNING' => '警告：您即將轉換的潛在客戶的狀態為「已轉換」。可能已從該潛在客戶建立連絡人和/或帳戶記錄。如果您希望繼續轉換潛在客戶，按一下「儲存」。如需返回潛在客戶而不轉換，按一下「取消」。',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' 可能的連絡人：',
    'LBL_CONVERTLEAD_ERROR' => '無法轉換潛在客戶',
    'LBL_CONVERTLEAD_FILE_WARN' => '您已成功轉換潛在客戶 {{leadName}}，但有一條或多條記錄上載附件時遇到問題。',
    'LBL_CONVERTLEAD_SUCCESS' => '您已成功轉換潛在客戶 {{leadName}}。',
    'LBL_COUNTRY' => '國家：',
    'LBL_CREATED_NEW' => '建立新',
	'LBL_CREATED_ACCOUNT' => '建立新帳戶',
    'LBL_CREATED_CALL' => '建立新通話',
    'LBL_CREATED_CONTACT' => '建立新連絡人',
    'LBL_CREATED_MEETING' => '建立新會議',
    'LBL_CREATED_OPPORTUNITY' => '建立新商機',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '潛在客戶',
    'LBL_DEPARTMENT' => '部門：',
    'LBL_DESCRIPTION_INFORMATION' => '描述資訊',
    'LBL_DESCRIPTION' => '描述：',
    'LBL_DO_NOT_CALL' => '切勿通話：',
    'LBL_DUPLICATE' => '類似潛在客戶',
    'LBL_EMAIL_ADDRESS' => '電子郵件地址：',
    'LBL_EMAIL_OPT_OUT' => '電子郵件退出：',
    'LBL_EXISTING_ACCOUNT' => '已使用現有帳戶',
    'LBL_EXISTING_CONTACT' => '已使用現有連絡人',
    'LBL_EXISTING_OPPORTUNITY' => '已使用現有商機',
    'LBL_FAX_PHONE' => '傳真：',
    'LBL_FIRST_NAME' => '名字：',
    'LBL_FULL_NAME' => '全名：',
    'LBL_HISTORY_SUBPANEL_TITLE'=>'歷史',
    'LBL_HOME_PHONE' => '家庭電話：',
    'LBL_IMPORT_VCARD' => '匯入 vCard',
    'LBL_IMPORT_VCARD_SUCCESS' => '從 vCard 成功建立潛在客戶',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => '透過從檔案系統匯入 vCard 自動建立新潛在客戶。',
    'LBL_INVALID_EMAIL'=>'無效的電子郵件：',
    'LBL_INVITEE' => '直屬員工',
    'LBL_LAST_NAME' => '姓氏：',
    'LBL_LEAD_SOURCE_DESCRIPTION' => '潛在客戶來源描述：',
    'LBL_LEAD_SOURCE' => '潛在客戶來源：',
    'LBL_LIST_ACCEPT_STATUS' => '接受狀態',
    'LBL_LIST_ACCOUNT_NAME' => '帳戶名稱',
    'LBL_LIST_CONTACT_NAME' => '潛在客戶名稱',
    'LBL_LIST_CONTACT_ROLE' => '角色',
    'LBL_LIST_DATE_ENTERED' => '建立日期',
    'LBL_LIST_EMAIL_ADDRESS' => '電子郵件',
    'LBL_LIST_FIRST_NAME' => '名字',
    'LBL_VIEW_FORM_TITLE' => '潛在客戶檢視表',
    'LBL_LIST_FORM_TITLE' => '潛在客戶清單',
    'LBL_LIST_LAST_NAME' => '姓氏',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => '潛在客戶來源描述',
    'LBL_LIST_LEAD_SOURCE' => '潛在客戶來源',
    'LBL_LIST_MY_LEADS' => '我的潛在客戶',
    'LBL_LIST_NAME' => '名稱',
    'LBL_LIST_PHONE' => '辦公室電話',
    'LBL_LIST_REFERED_BY' => '推薦人：',
    'LBL_LIST_STATUS' => '狀態',
    'LBL_LIST_TITLE' => '標題',
    'LBL_MOBILE_PHONE' => '行動電話：',
    'LBL_MODULE_NAME' => '潛在客戶',
    'LBL_MODULE_NAME_SINGULAR' => '潛在客戶',
    'LBL_MODULE_TITLE' => '潛在客戶：首頁',
    'LBL_NAME' => '名稱：',
    'LBL_NEW_FORM_TITLE' => '新潛在客戶',
    'LBL_NEW_PORTAL_PASSWORD' => '新入口網站密碼：',
    'LBL_OFFICE_PHONE' => '辦公室電話：',
    'LBL_OPP_NAME' => '商機名稱：',
    'LBL_OPPORTUNITY_AMOUNT' => '商機金額：',
    'LBL_OPPORTUNITY_ID'=>'商機 ID',
    'LBL_OPPORTUNITY_NAME' => '商機名稱：',
    'LBL_CONVERTED_OPPORTUNITY_NAME' => '已轉換商機名稱：',
    'LBL_OTHER_EMAIL_ADDRESS' => '其他電子郵件：',
    'LBL_OTHER_PHONE' => '其他電話：',
    'LBL_PHONE' => '電話：',
    'LBL_PORTAL_ACTIVE' => '使用中入口網站：',
    'LBL_PORTAL_APP'=> '入口網站應用程式',
    'LBL_PORTAL_INFORMATION' => '入口網站資訊',
    'LBL_PORTAL_NAME' => '入口網站名稱：',
    'LBL_PORTAL_PASSWORD_ISSET' => '入口網站密碼已設定：',
    'LBL_POSTAL_CODE' => '郵遞區號：',
    'LBL_STREET' => '街道',
    'LBL_PRIMARY_ADDRESS_CITY' => '主要地址城市',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '主要地址國家',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '主要地址郵遞區號',
    'LBL_PRIMARY_ADDRESS_STATE' => '主要地址州',
    'LBL_PRIMARY_ADDRESS_STREET_2'=>'主要地址街道 2',
    'LBL_PRIMARY_ADDRESS_STREET_3'=>'主要地址街道 3',
    'LBL_PRIMARY_ADDRESS_STREET' => '主要地址街道',
    'LBL_PRIMARY_ADDRESS' => '主要地址：',
    'LBL_RECORD_SAVED_SUCCESS' => '您已成功建立 {{moduleSingularLower}} <a href="#{{buildRoute model=this}}">{{full_name}}</a>。',
    'LBL_REFERED_BY' => '推薦人：',
    'LBL_REPORTS_TO_ID'=>'報表發送對象 ID',
    'LBL_REPORTS_TO' => '報表發送對象：',
    'LBL_REPORTS_FROM' => '報表來自：',
    'LBL_SALUTATION' => '稱呼',
    'LBL_MODIFIED'=>'修改人',
	'LBL_MODIFIED_ID'=>'按 ID 修改',
	'LBL_CREATED'=>'建立人',
	'LBL_CREATED_ID'=>'按 ID 建立',
    'LBL_SEARCH_FORM_TITLE' => '潛在客戶搜尋',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => '選取已核取的潛在客戶',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => '選取已核取的潛在客戶',
    'LBL_STATE' => '狀態：',
    'LBL_STATUS_DESCRIPTION' => '狀態描述：',
    'LBL_STATUS' => '狀態：',
    'LBL_TITLE' => '標題：',
    'LBL_UNCONVERTED'=> '未轉換',
    'LNK_IMPORT_VCARD' => '從 vCard 建立潛在客戶',
    'LNK_LEAD_LIST' => '檢視潛在客戶',
    'LNK_NEW_ACCOUNT' => '建立帳戶',
    'LNK_NEW_APPOINTMENT' => '建立預約',
    'LNK_NEW_CONTACT' => '建立連絡人',
    'LNK_NEW_LEAD' => '建立潛在客戶',
    'LNK_NEW_NOTE' => '建立附註',
    'LNK_NEW_TASK' => '建立工作',
    'LNK_NEW_CASE' => '建立實例',
    'LNK_NEW_CALL' => '記錄通話',
    'LNK_NEW_MEETING' => '排程會議',
    'LNK_NEW_OPPORTUNITY' => '建立商機',
	'LNK_SELECT_ACCOUNTS' => ' <b>或</b>選取帳戶',
    'LNK_SELECT_CONTACTS' => ' <b>或</b>選取連絡人',
    'NTC_COPY_ALTERNATE_ADDRESS' => '將備用地址複製到主要地址',
    'NTC_COPY_PRIMARY_ADDRESS' => '將主要地址複製到備用地址',
    'NTC_DELETE_CONFIRMATION' => '確定要刪除此記錄嗎？',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => '建立商機需要帳戶。\n請建立新帳戶或選取現有帳戶。',
    'NTC_REMOVE_CONFIRMATION' => '您確定要從實例中移除此潛在客戶嗎？',
    'NTC_REMOVE_DIRECT_REPORT_CONFIRMATION' => '確定要移除此直屬員工記錄嗎？',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE'=>'推廣活動記錄',
    'LBL_TARGET_OF_CAMPAIGNS'=>'成功的宣傳活動：',
    'LBL_TARGET_BUTTON_LABEL'=>'目標',
    'LBL_TARGET_BUTTON_TITLE'=>'目標',
    'LBL_TARGET_BUTTON_KEY'=>'T',
    'LBL_CAMPAIGN' => '推廣活動：',
  	'LBL_LIST_ASSIGNED_TO_NAME' => '指派的使用者',
    'LBL_PROSPECT_LIST' => '潛在客戶清單',
    'LBL_PROSPECT' => '目標',
    'LBL_CAMPAIGN_LEAD' => '推廣活動',
	'LNK_LEAD_REPORTS' => '檢視潛在客戶報表',
    'LBL_BIRTHDATE' => '出生日期：',
    'LBL_THANKS_FOR_SUBMITTING_LEAD' =>'感謝您的提交。',
    'LBL_SERVER_IS_CURRENTLY_UNAVAILABLE' =>'抱歉，伺服器目前不可用，請稍後再試一次。',
    'LBL_ASSISTANT_PHONE' => '助理電話：',
    'LBL_ASSISTANT' => '助理',
    'LBL_REGISTRATION' => '註冊',
    'LBL_MESSAGE' => '請在下方輸入您的資訊。將為您建立資訊和/或帳戶等待核准。',
    'LBL_SAVED' => '感謝您的註冊。將建立您的帳戶並且很快會有人與您連絡。',
    'LBL_CLICK_TO_RETURN' => '返回入口網站',
    'LBL_CREATED_USER' => '已建立使用者',
    'LBL_MODIFIED_USER' => '已修改使用者',
    'LBL_CAMPAIGNS' => '推廣活動',
    'LBL_CAMPAIGNS_SUBPANEL_TITLE' => '推廣活動',
    'LBL_CONVERT_MODULE_NAME' => '模組',
    'LBL_CONVERT_MODULE_NAME_SINGULAR' => '模組',
    'LBL_CONVERT_REQUIRED' => '必填',
    'LBL_CONVERT_SELECT' => '允許選取',
    'LBL_CONVERT_COPY' => '複製資料',
    'LBL_CONVERT_EDIT' => '編輯',
    'LBL_CONVERT_DELETE' => '刪除',
    'LBL_CONVERT_ADD_MODULE' => '新增模組',
    'LBL_CONVERT_EDIT_LAYOUT' => '編輯轉化版面配置',
    'LBL_CREATE' => '建立',
    'LBL_SELECT' => ' <b>或</b>選取',
	'LBL_WEBSITE' => '網站',
	'LNK_IMPORT_LEADS' => '匯入潛在客戶',
	'LBL_NOTICE_OLD_LEAD_CONVERT_OVERRIDE' => '通知：目前轉換潛在客戶螢幕包含自訂欄位。當您首次在 Studio 中自訂轉換潛在客戶螢幕時，您需要在版面配置中新增自訂欄位。和之前一樣，自訂欄位不會自動出現在版面配置。',
//Convert lead tooltips
	'LBL_MODULE_TIP' 	=> '用於在其中建立新記錄的模組。',
	'LBL_REQUIRED_TIP' 	=> '在轉換潛在客戶之前，必須建立或選取要求的模組。',
	'LBL_COPY_TIP'		=> '若核取，潛在客戶中的欄位將複製到新建立記錄中擁有相同名稱的欄位。',
	'LBL_SELECTION_TIP' => '可選取連絡人中擁有相關欄位的模組，而非在轉換潛在客戶的流程中建立。',
	'LBL_EDIT_TIP'		=> '修改此模組的轉換版面配置。',
	'LBL_DELETE_TIP'	=> '從轉換版面配置中移除此模組。',

    'LBL_ACTIVITIES_MOVE'   => '移動活動至',
    'LBL_ACTIVITIES_COPY'   => '複製活動至',
    'LBL_ACTIVITIES_MOVE_HELP'   => "選取將用來存放所移動潛在客戶活動的記錄。工作、通話、會議、筆記和電子郵件都將移動至選取的記錄。",
    'LBL_ACTIVITIES_COPY_HELP'   => "選取要為其建立潛在客戶活動複本的記錄。將為每條選取的記錄建立新工作、通話、會議和筆記。郵件將與選定的記錄相關聯。",
    //For export labels
    'LBL_PHONE_HOME' => '家庭電話',
    'LBL_PHONE_MOBILE' => '行動電話',
    'LBL_PHONE_WORK' => '工作電話',
    'LBL_PHONE_OTHER' => '其他電話',
    'LBL_PHONE_FAX' => '電話傳真',
    'LBL_CAMPAIGN_ID' => '推廣活動 ID',
    'LBL_EXPORT_ASSIGNED_USER_NAME' => '指派的使用者名稱',
    'LBL_EXPORT_ASSIGNED_USER_ID' => '指派的使用者 ID',
    'LBL_EXPORT_MODIFIED_USER_ID' => '按 ID 修改',
    'LBL_EXPORT_CREATED_BY' => '按 ID 建立',
    'LBL_EXPORT_PHONE_MOBILE' => '行動電話',
    'LBL_EXPORT_EMAIL2'=>'其他電子郵件地址',
	'LBL_EDITLAYOUT' => '編輯配置' /*for 508 compliance fix*/,
	'LBL_ENTERDATE' => '輸入日期' /*for 508 compliance fix*/,
	'LBL_LOADING' => '載入中' /*for 508 compliance fix*/,
	'LBL_EDIT_INLINE' => '編輯' /*for 508 compliance fix*/,
    //D&B Principal Identification
    'LBL_DNB_PRINCIPAL_ID' => 'D&B 主體 ID',
    //Dashlet
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商機',

    //Document title
    'TPL_BROWSER_SUGAR7_RECORDS_TITLE' => '{{module}} &raquo; {{appId}}',
    'TPL_BROWSER_SUGAR7_RECORD_TITLE' => '{{#if last_name}}{{#if first_name}}{{first_name}} {{/if}}{{last_name}} &raquo; {{/if}}{{module}} &raquo; {{appId}}',
    'LBL_NOTES_SUBPANEL_TITLE' => '附註',

    'LBL_HELP_CONVERT_TITLE' => '轉換 {{module_name}}',

    // Help Text
    // List View Help Text
    'LBL_HELP_RECORDS' => '{{plural_module_name}} 模組包含可能對您的組織提供的產品或服務感興趣的個人潛在客戶。一旦 {{module_name}} 符合擔任銷售 {{opportunities_singular_module}} 的資格，{{plural_module_name}} 即可轉換為 {{contacts_module}}、{{opportunities_module}} 和 {{accounts_module}}。在 Sugar 中建立 {{plural_module_name}} 的方法多種多樣，例如透過 {{plural_module_name}} 模組、複製、匯入 {{plural_module_name}} 等。建立 {{module_name}} 記錄之後，您可透過  {{plural_module_name}} 記錄檢視表，檢視並編輯 {{module_name}} 的相關資訊。',

    // Record View Help Text
    'LBL_HELP_RECORD' => '{{plural_module_name}} 模組包含可能對您的組織提供的產品或服務感興趣的個人潛在客戶。

- 透過按一下單個欄位或「編輯」按鈕，編輯此記錄的欄位。
- 透過切換左下角窗格至「資料檢視」，檢視或修改子面板其他記錄的連結。
- 透過切換左下角窗格至「活動流」，在 {{activitystream_singular_module}} 中執行和檢視使用者註解和記錄變更歷史。
- 使用記錄名稱右側的圖示追蹤此記錄或將此記錄新增至我的最愛。
- 「編輯」按鈕右側的下拉式「動作」功能表提供其他動作選項。',

    // Create View Help Text
    'LBL_HELP_CREATE' => '{{plural_module_name}} 模組包含可能對您的組織提供的產品或服務感興趣的個人潛在客戶。一旦 {{module_name}} 符合成為銷售 {{opportunities_singular_module}} 的資格，則將轉換成 {{contacts_singular_module}}、{{accounts_singular_module}}、{{opportunities_singular_module}} 或其他記錄。

如需建立 {{module_name}}：
1. 按需要提供欄位的值。
 －標記為「必填」的欄位必須填寫才能保存。 
 －如有必要，按一下「顯示更多」以顯示其他欄位。
2. 按一下「儲存」完成新記錄並返回至上一頁。',

    // Convert View Help Text
    'LBL_HELP_CONVERT' => '一旦 {{module_name}} 符合您的資格標準，Sugar 允許您將 {{plural_module_name}} 轉換為 {{contacts_module}}、{{accounts_module}} 和其他模組。

透過修改欄位單步執行每個模組，然後按一下每個「關聯」按鈕確認新記錄的值。

如果 Sugar 偵測到與您的 {{module_name}} 資訊匹配的現有記錄，您可選擇一個重複項，並按一下「關聯」按鈕確認選擇，或按一下「忽略並建立新的」繼續操作。

在確定每個必要和必須的模組後，按一下頂部的「儲存並轉換」按鈕，完成轉換。',

    //Marketo
    'LBL_MKTO_SYNC' => '同步至 Marketo&reg;',
    'LBL_MKTO_ID' => 'Marketo 潛在客戶 ID',
    'LBL_MKTO_LEAD_SCORE' => '潛在客戶得分',

    'LBL_FILTER_LEADS_REPORTS' => '潛在客戶報表',
    'LBL_DATAPRIVACY_BUSINESS_PURPOSE' => '業務目的同意',
    'LBL_DATAPRIVACY_CONSENT_LAST_UPDATED' => '同意上次更新',

    // Leads Pipeline view
    'LBL_PIPELINE_ERR_CONVERTED' => '無法更改 {{moduleSingular}} 狀態。此 {{moduleSingular}} 已轉換。',
);
