<?php

/**
 * Delete surat keluar data API endpoint
 * created   : 08 Jan 2021 10:34 am
 * 
 */

    error_reporting(-1);
    ini_set('display_errors', 'On');
    date_default_timezone_set('Asia/Jakarta');

    require_once 'DbHandlerSuratPengantarKeluar.php';
    $id = ((isset($_POST["id"])) ? $_POST["id"] : "");

    $db = new DbHandlerSuratPengantarKeluar();
    $db->deleteSuratPengantarKeluar($id);
?>