<?php
session_start();
include_once("config.php");
$token = hash("whirlpool", $_SESSION["username"].$_SESSION["email"]);
echo $token."<br>";
$fields = array(
    "username",
    "password",
    "email",
    "token",
    "verified"
);
$table = array(
    "name"      => "USERS",
    "fields"   => $fields
);
print_r($_SESSION);
$values = array(
                toQuote($_SESSION["username"]),
                toQuote($_SESSION["pass"]),
                toQuote($_SESSION["email"]),
                toQuote($token),
                '0'
);
$db->insertRecord(
    array(
            "table"     => $table,
            "values"    => $values
    )
);
header("Location: video.php");
?>
