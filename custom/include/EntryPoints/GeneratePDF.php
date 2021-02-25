<?php

namespace Sugarcrm\Custom\EntryPoints;

include 'custom/vendor/tcpdf/customtcpdf.php';

global $theme;

use Sugarcrm\Custom\Vendor\Tcpdf\CustomTCPDF;
use Sugarcrm\Sugarcrm\Security\InputValidation\InputValidation;

require_once('modules/Reports/index.php');
require_once('modules/Reports/templates/templates_reports.php');
require_once('modules/Reports/templates/templates_pdf.php');
require_once('modules/Reports/templates/templates_export.php');

require_once('modules/Reports/config.php');
global $current_language, $report_modules, $modules_report, $current_user, $app_strings, $mod_strings;


$reporterName = InputValidation::getService()->getValidInputRequest('save_report_as');

$args = array();
$jsonObj = getJSONobj();
if (isset($_REQUEST['id'])) {
    $saved_report_seed = \BeanFactory::newBean('Reports');
    $saved_report_seed->retrieve($_REQUEST['id'], false);

    if (empty($saved_report_seed->id)) {
        sugar_die($app_strings['ERROR_NO_RECORD']);
    }

    // do this to go through the transformation
    $reportObj = new \Report($saved_report_seed->content);
    $saved_report_seed->content = $reportObj->report_def_str;

    $savedReportContent = $jsonObj->decode($saved_report_seed->content);
    $returnArray = hasReportFilterModified($_REQUEST['id'], $savedReportContent['filters_def']);
    $reportCache = $returnArray['reportCache'];
    if (!empty($reportCache->id) && !$returnArray['isModified']) {
        $savedReportContent['filters_def'] = $reportCache->contents_array['filters_def'];
        $saved_report_seed->content = $jsonObj->encode($savedReportContent);
    } // if
    if ($returnArray['isModified']) {
        $args['warnningMessage'] = $mod_strings['LBL_REPORT_FILTER_MODIFIED_MESSAGE'];
    } // if
    if (!isset($args['warnningMessage']) && !empty($reportCache->id)) {
        if (strtotime($reportCache->date_modified) < strtotime($saved_report_seed->date_modified)) {
            $args['warnningMessage'] = $mod_strings['LBL_REPORT_MODIFIED_MESSAGE'];
        }
    } // if
    $args['reporter'] = new \Report($saved_report_seed->content);
    $args['reporter']->saved_report = $saved_report_seed;
        $savedReportContent = $jsonObj->decode($saved_report_seed->content);
        $newArray = array();
        $newArray['filters_def'] = $savedReportContent['filters_def'];
        $reportCache = saveReportFilters($saved_report_seed->id, $jsonObj->encode($newArray));

    if ( isset($_REQUEST['filter_key']) && isset($_REQUEST['filter_value'])) {
        $new_filter = array();
        list($new_filter['table_name'],$new_filter['name']) = explode(':',$_REQUEST['filter_key']);
        $new_filter['qualifier_name'] = 'is';
        $new_filter['input_name0'] = array($_REQUEST['filter_value']);

        if ( ! is_array($args['reporter']->report_def['filters_def'])) {
            $args['reporter']->report_def['filters_def'] = array();
        } // if
        array_push($args['reporter']->report_def['filters_def'],$new_filter);
        $args['reporter']->report_def['chart_type'] = 'none';
        $args['reporter']->chart_type = 'none';
    } // if

    $args['reporter']->is_saved_report = true;
    $args['reporter']->saved_report_id = $saved_report_seed->id;
    $args['reportCache'] = $reportCache;
}

// create report obj with the seed
$args['list_nav'] = '';
$args['upper_left'] = '';


// do saves, deletes, and publish
control($args);

$params = array();
if (!empty($_REQUEST['favorite'])) {
    $params[] = '<a href="index.php?module=Reports&action=index&favorite=1">' . htmlspecialchars($mod_strings['LBL_FAVORITES_TITLE']) . '</a>';
}
$star = '';
if (!empty($args['reporter']->saved_report->id)) {
    $star = \SugarFavorites::generateStar(
        \SugarFavorites::isUserFavorite('Reports', $args['reporter']->saved_report->id),
        'Reports',
        $args['reporter']->saved_report->id
    );
}
if (!empty($args['reporter']->name)) {
    $params[] = htmlspecialchars($args['reporter']->name) . '&nbsp;' . $star;
}

//Override the create url
$createURL = 'index.php?module=Reports&report_module=&action=index&page=report&Create+Custom+Report=Create+Custom+Report';
echo getClassicModuleTitle("Reports", $params, true, '', $createURL);

// show report interface
if (isset($_REQUEST['page']) && $_REQUEST['page'] == 'report') {
    // checkSavedReportACL($args['reporter'], $args);

    if (!empty($_REQUEST['to_pdf'])) {
        if (isset($args['reporter'])) {
            $args['reporter']->enable_paging = false;
            $args['reporter']->plain_text_output = true;

            if($args['reporter']->report_type == 'summary' && !empty($args['reporter']->report_def['summary_columns'])) {
                if($args['reporter']->show_columns
                    && !empty($args['reporter']->report_def['display_columns'])
                    && !empty($args['reporter']->report_def['group_defs'])) {
                    $type = "summary_combo";
                } elseif($args['reporter']->show_columns
                    && !empty($args['reporter']->report_def['display_columns'])
                    && empty($args['reporter']->report_def['group_defs'])) {
                    $type = "detail_and_total";
                } elseif(!empty($args['reporter']->report_def['group_defs'])) {
                    $type = "summary";
                } else {
                    $type = "total";
                }
            } elseif(!empty($args['reporter']->report_def['display_columns'])) {
                $type = "listview";
            }

            $pdf = new CustomTCPDF($args['reporter']);
            return process($pdf, $args['reporter']->name, true);
        }
        return;
    }
}

function process($pdf, $reportname, $stream)
{
    global $current_user;
    create_cache_directory('pdf');
    $pdf->process();
    @ob_clean();
    $filenamestamp = '';
    if(isset($current_user)){
        $filenamestamp .= '_'.$current_user->user_name;
    }
    $filenamestamp .= '_'.date(translate('LBL_PDF_TIMESTAMP', 'Reports'), time());
    $cr = array(' ',"\r", "\n","/");
    $filename = str_replace($cr, '_', $reportname.$filenamestamp.'.pdf');
    if(isset($_SERVER['HTTP_USER_AGENT']) && preg_match("/MSIE/", $_SERVER['HTTP_USER_AGENT'])) {
        $filename = urlencode($filename);
    }
    if($stream){
        //Force download as a file
        $pdf->Output($filename,'D');
    }else{
        // try to create the dir in case it doesn't exist for some reason
        $cachefile = sugar_cached('pdf/').basename($filename);
        $fp = sugar_fopen($cachefile, 'w');
        fwrite($fp, $pdf->Output('','S'));
        fclose($fp);

        return $cachefile;
    }
    return $filename;
}
