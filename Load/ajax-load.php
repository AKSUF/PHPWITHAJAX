<?php
include('../CommonArear/commonfunction.php');

$sql = "SELECT * FROM `student`";
$result = mysqli_query($con, $sql) or die("SQL Query Failed");

if (mysqli_num_rows($result) > 0) {
    $output = '
    <table border="1" width="100%" cellspacing="0" cellpadding="10px">
        <tr>
            <th width="100px">Id</th>
            <th>Name</th>
       <th width="100px">Edit</th>
       <th width="100px">Delete</th>

        </tr>
    ';

    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "
        <tr>
            <td>{$row['id']}</td>
            <td>{$row['first_name']} {$row['last_name']}</td> <td><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td><td><button class='delete-btn' data-id='{$row["id"]}'>Delete</button></td>
        </tr>";
    }

    $output .= '</table>';
    mysqli_close($con);
    echo $output;
} else {
    echo "<h2>No records found</h2>";
}
?>
