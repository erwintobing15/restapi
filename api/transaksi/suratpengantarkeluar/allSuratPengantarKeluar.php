<?php

/**
 * Fetch all surat pengantar keluar data API endpoint 
 * date   : 07/01/2021
 */

    error_reporting(-1);
    ini_set('display_errors', 'On');
    date_default_timezone_set('Asia/Jakarta');

    require_once 'DbHandlerSuratPengantarKeluar.php';
    
    $id = ((isset($_POST["id"])) ? $_POST["id"] : "");
    $dari_tgl   = ((isset($_POST["dari_tgl"])) ? $_POST["dari_tgl"] : "");
    $sampai_tgl = ((isset($_POST["sampai_tgl"])) ? $_POST["sampai_tgl"] : "");
    
    $db = new DbHandlerSuratPengantarKeluar();
    $db->allSuratPengantarKeluar($id, $dari_tgl, $sampai_tgl);
?>