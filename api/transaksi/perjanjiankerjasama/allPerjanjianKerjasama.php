<?php

/**
 * API endpoint to fetch all perjanjian kerjasama data 
 * created   : 09 Jan 2021 11:35 am
 * 
 */

    error_reporting(-1);
    ini_set('display_errors', 'On');
    date_default_timezone_set('Asia/Jakarta');

    require_once 'DbHandlerPerjanjianKerjasama.php';
    
    $id = ((isset($_POST["id"])) ? $_POST["id"] : "");
    $dari_tgl   = ((isset($_POST["dari_tgl"])) ? $_POST["dari_tgl"] : "");
    $sampai_tgl = ((isset($_POST["sampai_tgl"])) ? $_POST["sampai_tgl"] : "");
    
    $db = new DbHandlerPerjanjianKerjasama();
    $db->allPerjanjianKerjasama($id, $dari_tgl, $sampai_tgl);
?>