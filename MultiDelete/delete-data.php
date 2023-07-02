<?php
include("../CommonArear/commonfunction.php");

if (isset($_POST['ids']) && is_array($_POST['ids'])) {
    $student_id = $_POST['ids'];
    $str = implode(",", $student_id);
    $sql = "DELETE FROM students WHERE id IN ({$str})";
    $result = mysqli_query($con, $sql);
    if ($result) {
        echo 1;
    } else {
        echo 0;
    }
} else {
    // Handle the error condition when $_POST['ids'] is not set or is not an array
    echo 0;
}
?>
