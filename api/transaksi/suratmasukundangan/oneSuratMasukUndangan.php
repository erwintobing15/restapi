<?php

/**
 * Select one surat undangan masuk data API endpoint
 * date   : 08 Jan 2021 04:52 pm
 * 
 */

    error_reporting(-1);
    ini_set('display_errors', 'On');
    date_default_timezone_set('Asia/Jakarta');

    require_once 'DbHandlerSuratMasukUndangan.php';

    $id = ((isset($_POST["id"])) ? $_POST["id"] : "");

    $db = new DbHandlerSuratMasukUndangan();
    $db->oneSuratMasukUndangan($id);
?>