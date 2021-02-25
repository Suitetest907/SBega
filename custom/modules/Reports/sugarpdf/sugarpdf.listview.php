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


class ReportsSugarpdfListview extends ReportsSugarpdfReports
{
    function display(){
        global $report_modules, $app_list_strings;
        global $mod_strings, $locale;
        $this->bean->run_query();
        
        $this->AddPage();
        
        $item = array();
        $header_row = $this->bean->get_header_row('display_columns', false, false, true);
        $count = 0;
        // $GLOBALS['log']->fatal("--custom--ReportsSugarpdfListview--h__row--:",$header_row);
        // $GLOBALS['log']->fatal("--custom--ReportsSugarpdfListview--module--",$this->bean->report_def['module']);
        // if module report module is meetings then build custom pdf by using pdf template
        if (isset($this->bean->report_def['module']) && $this->bean->report_def['module'] == "Meetings")
        {
            $meetings = $this->prepareReportDataForMeeting($header_row);
            $this->generatePdfFromTemplate($meetings);
            $GLOBALS['log']->fatal("--custom--ReportsSugarpdfListview---meetings---:",$meetings);
        }
        else{
            while($row = $this->bean->get_next_row('result', 'display_columns', false, true)) {
                for($i= 0 ; $i < sizeof($header_row); $i++) {
                    $label = $header_row[$i];
                    $value = '';
                    if (isset($row['cells'][$i])) {
                        $value = $row['cells'][$i];
                    }
                    $item[$count][$label] = $value;
                }
                $count++;
            }
            $this->writeCellTable($item, $this->options);
        }
    }

    function prepareReportDataForMeeting($header_row){
        $report_columns = $this->bean->report_def['display_columns'];
        $header_row_keys = array();
        foreach ($report_columns as $column) {
            if ($column['table_key'] == "Meetings:project" && $column['name'] == "name"){
                $header_row_keys[] = "project_".$column['name']; 
            }else{
                $header_row_keys[] = $column['name']; 
            }
        }
        $image_fields = array('icc_image1','icc_image2','icc_image3','icc_image4');
        $count = 0;
        // $GLOBALS['log']->fatal("custom--ReportsSugarpdfListview--display--deefff--",$this->bean->report_def);
        while($row = $this->bean->get_next_row('result', 'display_columns', false, true)) {
            // $GLOBALS['log']->fatal("--custom--ReportsSugarpdfListview--display--row--",$row);
            for($i= 0 ; $i < sizeof($header_row_keys); $i++) {
                $label = $header_row_keys[$i];
                $value = '';
                if (isset($row['cells'][$i])) 
                {   
                    // to extract image id from report generated data
                    if (in_array($label, $image_fields)){
                        $img = $row['cells'][$i];
                        $value = $this->getImageId($img);
                    }else{
                        $value = $row['cells'][$i];
                    }  
                }
                
                $item[$count][$label] = $value;
            }
            $count++;
        }
        return $item;
    }

    function getImageId($img){
        $img_id = '';
        $pos = strpos($img,"download&id=");
        // $GLOBALS['log']->fatal("----ReportsSugarpdfListview----pos----:".$pos);
        $pos = $pos + 12;
        $img_id = substr($img, $pos, 36);
        // $GLOBALS['log']->fatal("----ReportsSugarpdfListview----id----:".$img_id);
        return "upload/".$img_id;
    }

    function generatePdfFromTemplate($items)
    {
        $this->getTemplate();
        $this->getSmartyInstance();
        $this->ss->assign('meeting_name', 'meeting with Karamat ALi');
        $this->ss->assign('meetings', $items);
        $img_id = 'upload/234b2768-0885-11eb-a007-e86f384c52cb';
        $this->ss->assign('meeting_image1_c', $img_id);
        //create html from tpl  
        $html = $this->ss->fetch($this->templateLocation);
        $GLOBALS['log']->fatal("----custom----generatePdfFromTemplate----fetch result---html---",$html);
        $this->writeHTML($html);
    }

    function getTemplate(){
        $this->pdf = null;
        // $this->request = (object) $_GET;
        $this->ss = null;
        $this->pdfFilename = null;
        // to get pdf templete
        $this->pdfTemplate = $pdfTemplate = BeanFactory::newBean('PdfManager');

        if ($pdfTemplate->retrieve('7fa689f2-0dea-11eb-aad7-e86f384c52cb', false) !== null) {
            $this->templateLocation = $this->buildTemplateFile($pdfTemplate);
            $GLOBALS['log']->fatal("----------this->templateLocation--------",$this->templateLocation);

        }
    }

    private function buildTemplateFile($pdfTemplate, $previewMode = FALSE)
    {
        if (!empty($pdfTemplate)) {

            if ( ! file_exists(sugar_cached('modules/PdfManager/tpls')) ) {
                mkdir_recursive(sugar_cached('modules/PdfManager/tpls'));
            }
            $tpl_filename = sugar_cached('modules/PdfManager/tpls/' . $pdfTemplate->id . '.tpl');

            if ($previewMode !== FALSE) {
                $tpl_filename = sugar_cached('modules/PdfManager/tpls/' . $pdfTemplate->id . '_preview.tpl');
                $pdfTemplate->body_html = str_replace(array('{', '}'), array('&#123;', '&#125;'), $pdfTemplate->body_html);
            }
            sugar_file_put_contents($tpl_filename, $pdfTemplate->body_html);

            return $tpl_filename;
        }

        return '';
    }

    private function getSmartyInstance(){
        if ( !($this->ss instanceof Sugar_Smarty) ) {
            $this->ss = new Sugar_Smarty();
            // TODO: Remove after MAR-1064 is merged.
            // Enable enhanced security for user-provided templates. This
            // includes disabling the {php} Smarty tag.
            $this->ss->security = false;
            if (defined('SUGAR_SHADOW_PATH')) {
                $this->ss->secure_dir[] = SUGAR_SHADOW_PATH;
            }

            $this->ss->assign('MOD', $GLOBALS['mod_strings']);
            $this->ss->assign('APP', $GLOBALS['app_strings']);
        }
    }
}
