<?php
include('../CommonArear/commonfunction.php');
$name=$_POST['name'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$country=$_POST['country'];
$sql="INSERT INTO students (name, age,gender,country) values('{$name}','{$age}','{$gender}','{$country}')";
if(mysqli_query($con,$sql)){
echo "Hello {$name} your record is saved";
}else{
echo "Can't save your data";
}

?>