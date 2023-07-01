<?php
$student_id=$_POST['id'];
include('../CommonArear/commonfunction.php');
$sql = "SELECT * FROM `student` where id={$student_id}";
$result = mysqli_query($con, $sql) or die("SQL Query Failed");
$output="";
if (mysqli_num_rows($result) > 0) {
    $output = '';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
        <tr>
         <td>Last Name</td>
         <td>
         <input type='text' id='edit-fname' value='{$row['first_name']}'>
         <input type='text' id='edit-id' hidden value='{$row['id']}'>
         
         </td>
        </tr>
        <tr>
        <td>Last Name</td>
        <td><input type='text' id='edit-lname' value='{$row['last_name']}'></td>
        </tr>
        <tr>
        <td></td>
        <td><input type='submit' id='edit-submit' value='save'></td>
        </tr>
        ";
    }

    mysqli_close($con);
    echo $output;
} else {
    echo "<h2>No records found</h2>";
}
?>