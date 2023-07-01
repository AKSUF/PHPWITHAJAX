<?php
include('../CommonArear/commonfunction.php');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);
$id=$data['id'];
$name = $data['name'];
$age = $data['age'];
$gender = $data['gender'];
$country = $data['country'];

$sql = "UPDATE students SET name='$name', age='$age', gender='$gender', country='$country' where id={$id}";
$result = mysqli_query($con, $sql) or die("SQL Query Failed");

if ($result) {
    echo json_encode(array('message' => 'Student Record Updated', 'status' => true));
} else {
    echo json_encode(array('message' => 'No Student Record Updated', 'status' => false));
}
?>