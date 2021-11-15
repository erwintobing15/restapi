<?php

/**
 * Fetch all surat pengantar keluar data API endpoint 
 * created   : 08 Jan 2021 13:32 pm
 * 
 */

    error_reporting(-1);
    ini_set('display_errors', 'On');
    date_default_timezone_set('Asia/Jakarta');

    require_once 'DbHandlerSuratMasukUndangan.php';
    
    $id = ((isset($_POST["id"])) ? $_POST["id"] : "");
    $dari_tgl   = ((isset($_POST["dari_tgl"])) ? $_POST["dari_tgl"] : "");
    $sampai_tgl = ((isset($_POST["sampai_tgl"])) ? $_POST["sampai_tgl"] : "");
    
    $db = new DbHandlerSuratMasukUndangan();
    $db->allSuratMasukUndangan($id, $dari_tgl, $sampai_tgl);
?>