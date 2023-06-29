<?php
include('../CommonArear/commonfunction.php');
$student_id=$_POST['id'];
$sql="DELETE FROM student WHERE id={$student_id}";
$result=mysqli_query($con,$sql)or die("SQL Query Faled");
if($result){
    echo 1;
}else{
    echo 0;
}

?>