<?php
include('../CommonArear/commonfunction.php');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$search_value = isset($_GET['search']) ? $_GET['search'] : die();

$sql = "SELECT * FROM `students` WHERE name LIKE '%{$search_value}%'";

$result = mysqli_query($con, $sql) or die('SQL query failed');

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo json_encode(array('message' => 'No Record Found', 'status' => false));
}
?>