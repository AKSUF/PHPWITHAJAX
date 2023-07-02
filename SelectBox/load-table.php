<?php
include('../CommonArear/commonfunction.php');
$country = $_POST['country'];
$sql = "SELECT * FROM `students` WHERE country='$country'";
$result = mysqli_query($con, $sql) or die("SQL query failed");
$output = "";

if (mysqli_num_rows($result) > 0) {
    $output .= '<table border="0" width="100%" cellpadding="10px">
    <tr>
    <th width="100px">ID</th>
    <th>Name</th>
    <th width="90px">Age</th>
    <th width="90px">Gender</th>
    </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
        <tr>
        <td>{$row['id']}</td>
        <td>{$row['name']}</td>
        <td>{$row['age']}</td>
        <td>{$row['gender']}</td>
        </tr>";
    }

    $output .= "</table>";
    echo $output;
} else {
    echo "No records found";
}
?>
