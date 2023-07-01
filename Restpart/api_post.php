<?php
include('../CommonArear/commonfunction.php');
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$age = $data['age'];
$gender = $data['gender'];
$country = $data['country'];

$sql = "INSERT INTO students (name, age, gender, country) VALUES ('$name', '$age', '$gender', '$country')";
$result = mysqli_query($con, $sql) or die("SQL Query Failed");

if ($result) {
    echo json_encode(array('message' => 'Student Record Inserted', 'status' => true));
} else {
    echo json_encode(array('message' => 'No Student Record Inserted', 'status' => false));
}
?>
