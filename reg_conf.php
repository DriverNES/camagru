<?php
    session_start();
    include_once("config.php");
    $check = array("username"=>$_GET['username'], "token"=>$_GET['token']);
    print_r($check);
    $db->appendRecord($check);
    header("Location: video.php");
?>