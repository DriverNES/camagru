<?php
session_start();
include_once("config.php");
$token = hash("whirlpool", $_SESSION["username"].$_SESSION["email"]);
echo $token."<br>";
$token = substr(str_shuffle($token), 0, 15);
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
$username = $_SESSION["username"];
unset($_SESSION["pass"]);
$message = "127.0.0.1:8080/camagru/reg_conf.php?username=$username&token=$token";
mail($_SESSION["email"], "Email confirmation for Camagru", $message);

header("Location: video.php");
?>
