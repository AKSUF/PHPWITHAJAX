<?php
include('../CommonArear/commonfunction.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];

$sql = "INSERT INTO student (first_name, last_name) VALUES ('$first_name', '$last_name')";
$result = mysqli_query($con, $sql);

if ($result) {
    echo 1;
} else {
    echo 0;
}

mysqli_close($con);
?>
