<?php
include "../writer.php";

$check = new Writer();
$check->createtbl();

var_dump($_POST);

echo json_encode($check);


