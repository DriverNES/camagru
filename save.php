<?php

include('config.php');



$headers = getallheaders();
if ($headers["Content-type"] == "application/json") {
    $stuff = json_decode(file_get_contents("php://input"), true);
    var_dump($stuff);
}
$fields = array(
    "image",
    "userID"
);
$table = array(
    "name"      => "images",
    "fields"   => $fields
);
$values = array(
                toQuote($stuff["pic"]),
                toQuote("1"),
);
$db->insertRecord(
    array(
            "table"     => $table,
            "values"    => $values
    )
);

?>