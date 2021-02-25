<?php

/**
 * @author Insignio RT
 * 2020-03-19
 * Override  entrypoint to make sugar event logic will be triggered
 */
$entry_point_registry['ICC_Quotes_pdf'] = array(
    'file' => 'custom/include/EntryPoints/GeneratePDF.php',
    'auth' => true
);
