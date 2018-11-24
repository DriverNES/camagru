<?php
    include("header.php");
    if ($_POST["like-btn"]){
        echo "poes";
        $statement = "UPDATE images SET likes = likes + 1 WHERE imageID = ".toQuote($_GET["imageID"]);
        $db->runStatement($db->getDBConn(),$statement);
    }
    $out2 = $db->returnRecord("SELECT * FROM images WHERE imageID = ".toQuote($_GET["imageID"]));
    echo "<div class='imagediv' style='top:10%'><img src=".$out2[0]["image"].">";
    if ($_SESSION["username"])
        echo "<div><form action='' method='post'><input type='submit' class='btn1' value='like!' name='like-btn'></form></div>";
    echo "</div>";
?>