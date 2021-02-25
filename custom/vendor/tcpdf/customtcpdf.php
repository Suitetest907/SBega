<?php

namespace Sugarcrm\Custom\Vendor\Tcpdf;

require 'custom/vendor/tcpdf/tcpdf.php';

/**
 *
 */
class CustomTCPDF extends \TCPDF
{
    function __construct($bean = null, $sugarpdf_object_map = array(),$orientation=PDF_PAGE_ORIENTATION, $unit=PDF_UNIT, $format=PDF_PAGE_FORMAT, $unicode=true, $encoding='UTF-8', $diskcache=false){
        global $locale;
      //  $encoding = $locale->getExportCharset();
        if(empty($encoding)){
            $encoding = "UTF-8";
        }
        parent::__construct($orientation,$unit,$format,$unicode,$encoding,$diskcache);
        $this->module = $GLOBALS['module'];
        $this->bean = $bean;
        $this->sugarpdf_object_map = $sugarpdf_object_map;
        if(!empty($_REQUEST["sugarpdf"])){
            $request = InputValidation::getService();
            $this->action = $request->getValidInputRequest('sugarpdf', array('Assert\Regex' => array('pattern' => '/^[a-z0-9_-]+$/i')));
        }
    }

    /**
     * This method will be called from the controller and is not meant to be overridden.
     */
    function process(){
        $this->preDisplay();
        $this->display();

    }

    /**
     * This method will display the errors on the page.
     */
    function displayErrors(){
        foreach($this->errors as $error) {
            echo '<span class="error">' . $error . '</span><br>';
        }
    }


    /**
     * [OVERRIDE] - This method is meant to overidden in a subclass. The purpose of this method is
     * to allow a view to do some preprocessing before the display method is called. This becomes
     * useful when you have a view defined at the application level and then within a module
     * have a sub-view that extends from this application level view.  The application level
     * view can do the setup in preDisplay() that is common to itself and any subviews
     * and then the subview can just override display(). If it so desires, can also override
     * preDisplay().
     */
    function preDisplay(){
        // set document information
        $this->SetCreator(PDF_CREATOR);
        $this->SetAuthor(PDF_AUTHOR);
        $this->SetTitle(PDF_TITLE);
        $this->SetSubject(PDF_SUBJECT);
        $this->SetKeywords(PDF_KEYWORDS);

        // set other properties
        $compression=false;
        if(PDF_COMPRESSION == "on"){
            $compression=true;
        }
        $this->SetCompression($compression);
        $protection=array();
        if(PDF_PROTECTION != ""){
            $protection=explode(",",PDF_PROTECTION);
        }

        // $this->SetProtection(
        //     $protection,
        //     \Blowfish::decode(Blowfish::getKey('sugarpdf_pdf_user_password'), PDF_USER_PASSWORD),
        //     \Blowfish::decode(Blowfish::getKey('sugarpdf_pdf_owner_password'), PDF_OWNER_PASSWORD)
        // );
        $this->setCellHeightRatio(K_CELL_HEIGHT_RATIO);
        $this->setJPEGQuality(intval(PDF_JPEG_QUALITY));
        $this->setPDFVersion(PDF_PDF_VERSION);

        // set default header data
        $this->setHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);

        // set header and footer fonts
        $this->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $this->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

        //set margins
        $this->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $this->setHeaderMargin(PDF_MARGIN_HEADER);
        $this->setFooterMargin(PDF_MARGIN_FOOTER);

        //set auto page breaks
        $this->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

        //set image scale factor
        $this->setImageScale(PDF_IMAGE_SCALE_RATIO);

        //set some language-dependent strings
        //$this->setLanguageArray($l);

        // ---------------------------------------------------------

    }

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
        $meeting_ids = array();
        $report_columns = $this->bean->report_def['display_columns'];
        $header_row_keys = array();
        foreach ($report_columns as $column) {
            if ($column['table_key'] == "Meetings:icc_opportunities"){
                $header_row_keys[] = "projekte_".$column['name']; 
            }else{
                $header_row_keys[] = $column['name']; 
            }
        }
        $image_fields = array('icc_image1','icc_image2','icc_image3','icc_image4');
        $count = 0;
        while($row = $this->bean->get_next_row('result', 'display_columns', false, true)) {
            $GLOBALS['log']->fatal("--custom--prepareReportDataForMeeting--display--row--",$row);
            for($i= 0 ; $i < sizeof($header_row_keys); $i++) {
                $label = $header_row_keys[$i];
                // $GLOBALS['log']->fatal("--custom--prepareReportDataForMeeting--label----",$label);
                $value = '';
                if (isset($row['cells'][$i])) 
                {   
                    // to extract image id from report generated data
                    if (in_array($label, $image_fields)){
                        $img = $row['cells'][$i];
                        $value = $this->getImageId($img);
                    }
                    //to get industry count we need meeting ids
                    else if($label == "id"){
                        $meeting_ids[] =  $row['cells'][$i];
                        $value = $row['cells'][$i];
                    }
                    else{
                        $value = $row['cells'][$i];
                    }  
                }                
                $item[$count][$label] = $value;
            }
            $count++;
        }
        $item['meeting_ids'] = $meeting_ids;
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
        $this->ss->assign('meetings', $items);
        $now_user = \TimeDate::getInstance()->getNow();
        $user_format = \TimeDate::getInstance()->get_date_format();
        $this->ss->assign('week_number', $now_user->format('W'));
        $this->ss->assign('week_start_date', date($user_format, strtotime('Monday this week', $now_user->getTimeStamp())));
        $this->ss->assign('week_end_date', date($user_format, strtotime('Sunday this week', $now_user->getTimeStamp())));
        $img_id = 'upload/234b2768-0885-11eb-a007-e86f384c52cb';
        $this->ss->assign('meeting_image1_c', $img_id);
        //to grt industry count
        $industry_count = $this->getIndustryCount($items['meeting_ids']);
        $this->ss->assign('meetings_count', $industry_count);
        $this->ss->assign('site_url', \SugarConfig::getInstance()->get('site_url'));
        //create html from tpl  
        $html = $this->ss->fetch($this->templateLocation);
        $this->writeHTML($html);
    }

    function getTemplate(){
        $this->pdf = null;
        // $this->request = (object) $_GET;
        $this->ss = null;
        $this->pdfFilename = null;
        // to get pdf templete
        $this->pdfTemplate = $pdfTemplate = \BeanFactory::newBean('PdfManager');

        if ($pdfTemplate->retrieve('7fa689f2-0dea-11eb-aad7-e86f384c52cb', false) !== null) {
            $this->templateLocation = $this->buildTemplateFile($pdfTemplate);
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
            $this->ss = new \Sugar_Smarty();
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

    public function Header()
    {

    }

    // to get industry count 
    public function getIndustryCount($meeting_ids){
        $industry_count = array();
        // to assign default value,0, for each industry count
        $industry_dom = $GLOBALS['app_list_strings']['industry_dom'];
        foreach ($industry_dom as $key => $value) {
            if(!empty($key)){
                $industry_count[$key] = 0;
            } 
        }
        $industry_count_total = 0;
        if(!empty($meeting_ids)){
            $m_ids = "( '" . implode( "', '", $meeting_ids ) . "' )";
            $sql = "SELECT 
                        a.industry AS industry, COUNT(a.id) AS count
                    FROM
                        meetings m
                        JOIN icc_meetings_opportunities mo ON m.id = mo.meeting_id AND mo.deleted = 0
                        JOIN accounts_opportunities ao ON ao.opportunity_id = mo.opportunity_id AND ao.deleted = 0
                        JOIN accounts a ON a.id = ao.account_id AND a.deleted = 0
                    WHERE
                        m.id IN ".$m_ids."
                        AND m.deleted = 0
                        GROUP BY a.industry";
            $conn = $GLOBALS['db']->getConnection(); 
            $stmt = $conn->executeQuery($sql);  //, array($user_id)
            while ($industry = $stmt->fetch()) {
                $industry_count[$industry['industry']] = $industry['count'];
                $industry_count_total += $industry['count'];
            }
        }
        $industry_count['total_count'] = $industry_count_total;
        return array($industry_count);
    }

    /**
     * Disable zlib output compression if we are downloading the PDF.
     *
     * @see TCPDF::Output()
     */
    public function Output($name='doc.pdf', $dest='I')
    {
        if ( $dest == 'I' || $dest == 'D') {
            ini_set('zlib.output_compression', 'Off');
        }

        return parent::Output($name,$dest);
    }
}
