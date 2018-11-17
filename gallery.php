<?php
    // ini_set('display_errors', 'On');
    // include("header.php");
    include("config.php");
    $out = $db->returnRecord("SELECT * FROM images");
    $i = 0;
    while ($out[$i]){
        echo "<img src=".$out[$i]["image"].">";
        $i++;
    }
?>