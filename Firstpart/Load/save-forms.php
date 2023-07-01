<?php
include('../CommonArear/commonfunction.php');
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$sql = "insert into student(first_name,last_name) values ('{$first_name}','{$last_name}')";

if (mysqli_query($con, $sql)) {
    echo 1;
} else {
    echo 0;
}
?>

