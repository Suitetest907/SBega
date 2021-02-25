<?php

if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

require_once('include/utils/file_utils.php');
require_once('include/upload_file.php');
require_once('include/utils.php');

function smarty_modifier_icc_product_image_path($relative_image_path)
{
    $mime_types = array(
        "image/png" => "png",
        "image/jpeg" => "jpg"
    );
    
    // get the actual image id stored in upload
    $filename = explode("//", $relative_image_path);
    $filename = end($filename);
    
    // getting mime type
    $mime_type = get_file_mime_type($relative_image_path);
    $ext = $mime_types[$mime_type];

    $upload_path = $GLOBALS['sugar_config']['upload_dir'];
    // building tmp path with filename and extension
    $new_filename = "tmp/".$filename;
    if (!file_exists($upload_path.$new_filename)) {
        $new_filename = $filename;
    }
    $full_path = $upload_path.$new_filename;
    $full_path_ext = $full_path.".{$ext}";

    // Make a copy with extension
    copy($full_path, $full_path_ext);

    //returning the full path
    if (file_exists($full_path_ext)) {
        return $full_path_ext;
    }

    return '';
}

?>
