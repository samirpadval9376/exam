<?php

header("Content-Type: application/json");
header("Access-Control-Allow-Method: POST");

include("../../config/config.php");


$res = array();
$config = new Config();

if($_SERVER['REQUEST_METHOD'] == "POST") {

    $b_name = $_POST['book_name'];
    $b_date = $_POST['borrow_date'];
    $d_date = $_POST['deu_date'];

    $result = $config->insert($b_name,$b_date,$d_date);

    $res['msg'] = $result ? "Inserted..." : "Failled...";

    http_response_code($result ? 201 : 403);

}
else {
    $res['msg'] = "Only POST method is allowed...";
}

echo json_encode($res);
?>