<?php
include('../CommonArear/commonfunction.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $sql = "SELECT * FROM student WHERE id = $id";
    $result = mysqli_query($con, $sql) or die("SQL query failed");
    $output = mysqli_fetch_all($result, MYSQLI_ASSOC);

    echo json_encode($output);
} else {
    echo "No ID provided.";
}
?>
