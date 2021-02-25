<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/utils/file_utils.php');
require_once('include/upload_file.php');
require_once('include/utils.php');

// smarty helper to generate image optional parameters by image id
function smarty_modifier_icc_meeting_image_path($relative_image_path)
{
    $mime_types = array(
        "image/png" => "png",
        "image/jpeg" => "jpg"
    );

    // get the actual image id stored in upload
    $filename = explode("/", $relative_image_path);
    $filename = $filename[count($filename)-1];
    // getting mime type
    $mime_type = get_file_mime_type($relative_image_path);
    $ext = $mime_types[$mime_type];
    $upload_path = $GLOBALS['sugar_config']['upload_dir'];
    // building tmp path with filename and extension
    $new_filename = "tmp/".$filename.".".$ext;
    $full_path = $upload_path.$new_filename;

    //checking if the file exist
    if (!SugarAutoloader::fileExists($full_path)) {
        $uploadFile = new UploadFile();
        $result = $uploadFile->duplicate_file($filename, $new_filename);
    }
    //returning the full path
    return $full_path;
}
