<?php
include "../CommonArear/commonfunction.php";
$sql="select * from student";

$result=mysqli_query($con,$sql) or die ("SQL Query Failed");
$output=mysqli_fetch_all($result,MYSQLI_ASSOC);
$json_data=json_encode($output,JSON_PRETTY_PRINT);
$file_name="my-" .date("d-m-Y").".json";
if(file_put_contents("../DynamicJson/{$file_name}",$json_data)){
    echo $file_name ."File created";

}else{
    echo "Can't insert into json file";
}
?>