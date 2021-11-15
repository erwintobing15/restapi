<?php

/**
 * Fetch all surat keluar data API endpoint 
 * date   : 07/01/2021
 * 
 */

    error_reporting(-1);
    ini_set('display_errors', 'On');
    date_default_timezone_set('Asia/Jakarta');

    require_once 'DbHandlerSuratKeluar.php';
    
    $id = ((isset($_POST["id"])) ? $_POST["id"] : "");
    $dari_tgl   = ((isset($_POST["dari_tgl"])) ? $_POST["dari_tgl"] : "");
    $sampai_tgl = ((isset($_POST["sampai_tgl"])) ? $_POST["sampai_tgl"] : "");
    
    $db = new DbHandlerSuratKeluar();
    $db->allSuratKeluar($id, $dari_tgl, $sampai_tgl);
?>