<?php
include('../CommonArear/commonfunction.php');
$sql = "SELECT DISTINCT country FROM students";
$result = mysqli_query($con, $sql) or die("SQL Query Failed");

if (mysqli_num_rows($result) > 0) {
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);
    echo json_encode($output);
} else {
    echo "No record found";
}
?>
