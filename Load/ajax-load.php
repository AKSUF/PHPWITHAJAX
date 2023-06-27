<?php
include('../CommonArear/connect.php');
$sql="select * from  `student`";
$result=mysqli_query($con,$sql) or die ("SQL Query Failed");

if(mysqli_num_rows($result)>0){
$output='
<table border="1" width="100%" cellspacing="0" cellpadding="10px">

<tr>
<th>Id</th>
<th>Name</th>
<th></th>
</tr>
';
while($row=mysqli_fetch_assoc($result)){
    $output.="<tr>
    <td>{$row["id"]}</td>
    <td>{$row["first_name"]}{$row["last_name"]}</td>
    </tr>";
}
$output.="</table>";
mysqli_close($con);
echo $output;
}else{
echo "<h2>No record found</h2>";
}
?>
