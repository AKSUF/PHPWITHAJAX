<?php
include("../CommonArear/commonfunction.php");
$search_term = $_POST['country'];
$sql = "SELECT DISTINCT country FROM students WHERE country LIKE '%{$search_term}%'";
$result = mysqli_query($con, $sql) or die("SQL Query Failed");
$output = "<ul>";

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<li>{$row['country']}</li>";
    }
} else {
    $output .= "<li>City not found</li>";
}

$output .= "</ul>";
echo $output;
?>
