<?php
$con = mysqli_connect('localhost', 'root','', 'pracajax');
if($_POST['type']==""){
    $sql="Select * from `country`";
    $query=mysqli_query($con,$sql);
    $str="";
    while($row=mysqli_fetch_assoc($query)){
        $str.="<option value='{$row['cid']}'>{$row['cname']}</option>";
}
}else if($_POST['type']=='stateData'){
    $sql="Select * from `state` where country={$_POST['id']}";
    $query=mysqli_query($con,$sql);
    $str="";
    while($row=mysqli_fetch_assoc($query)){
        $str.="<option value='{$row['sid']}'>{$row['sname']}</option>";
}
}

echo $str;
?>