<?php
include('../CommonArear/commonfunction.php');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: DELETE');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
$id = $data['id'];

$sql = "DELETE FROM `students` WHERE id = $id";
$result = mysqli_query($con, $sql) or die("SQL Query Failed");

if ($result) {
    echo json_encode(array('message' => 'Record Deleted Successfully', 'status' => true));
} else {
    echo json_encode(array('message' => 'Record not Deleted', 'status' => false));
}
?>
