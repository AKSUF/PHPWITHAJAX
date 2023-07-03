<?php
include('../CommonArear/commonfunction.php');
$name = $_POST['name'];
$countries = $_POST['country'];
$countries = explode(",", $countries);
$values = "";
foreach ($countries as $country) {
    $country = mysqli_real_escape_string($con, $country);
    $values .= "('{$name}', '{$country}'),";
}
$values = rtrim($values, ",");
$sql = "INSERT INTO students (name, country) VALUES {$values}";

if (mysqli_query($con, $sql)) {
    echo "Successfully Saved";
} else {
    echo "Can't save form data";
}
?>
