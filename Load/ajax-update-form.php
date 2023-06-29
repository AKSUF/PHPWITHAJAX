<?php
include('../CommonArear/commonfunction.php');

$student_id = $_POST['id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$sql = "UPDATE student SET first_name='{$first_name}', last_name='{$last_name}' WHERE id={$student_id}";
$result = mysqli_query($con, $sql) or die("SQL Query Failed");

if ($result) {
    echo 1;
} else {
    echo 0;
}
?>
