<?php
include('../CommonArear/commonfunction.php');

$sql="select * from student";
$result=mysqli_query($con,$sql) or die("SQL query failed");
$output=mysqli_fetch_all($result,MYSQLI_ASSOC);

echo "<pre>";
print_r($output);
echo "<pre>";

?>