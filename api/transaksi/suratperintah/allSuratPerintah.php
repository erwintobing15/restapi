<?php

/**
 * API endpoint to fetch all surat perintah data 
 * created   : 09 Jan 2021 09:06 am
 */

    error_reporting(-1);
    ini_set('display_errors', 'On');
    date_default_timezone_set('Asia/Jakarta');

    require_once 'DbHandlerSuratPerintah.php';
    
    $id = ((isset($_POST["id"])) ? $_POST["id"] : NULL);
    $dari_tgl   = ((isset($_POST["dari_tgl"])) ? $_POST["dari_tgl"] : NULL);
    $sampai_tgl = ((isset($_POST["sampai_tgl"])) ? $_POST["sampai_tgl"] : NULL);
    
    $db = new DbHandlerSuratPerintah();
    $db->allSuratPerintah($id, $dari_tgl, $sampai_tgl);
?>