<?php

/**
 * Get all surat masuk data API endpoint
 * created : 07 January 2021
 */

    error_reporting(-1);
    ini_set('display_errors', 'On');
    date_default_timezone_set('Asia/Jakarta');

    require_once 'DbHandler.php';
    
    $id = ((isset($_POST['id']) ? $_POST['id'] : NULL));
    $dari_tgl   = ((isset($_POST["dari_tgl"])) ? $_POST["dari_tgl"] : NULL);
    $sampai_tgl = ((isset($_POST["sampai_tgl"])) ? $_POST["sampai_tgl"] : NULL);
    
    $db = new DbHandler();
    $db->allSuratMasuk($id, $dari_tgl, $sampai_tgl);
?>