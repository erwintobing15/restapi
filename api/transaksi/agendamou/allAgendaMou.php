<?php

/**
 * API endpoint to fetch all agenda mou data 
 * created   : 09 Jan 2021 11:35 am
 * 
 */

    error_reporting(-1);
    ini_set('display_errors', 'On');
    date_default_timezone_set('Asia/Jakarta');

    require_once 'DbHandlerAgendaMou.php';
    
    $id    = ((isset($_POST["id"])) ? $_POST["id"] : "");
    $dari_tgl   = ((isset($_POST["dari_tgl"])) ? $_POST["dari_tgl"] : "");
    $sampai_tgl = ((isset($_POST["sampai_tgl"])) ? $_POST["sampai_tgl"] : "");
    
    $db = new DbHandlerAgendaMou();
    $db->allAgendaMou($id, $dari_tgl, $sampai_tgl);
?>