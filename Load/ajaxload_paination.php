<?php
include('../CommonArear/commonfunction.php');

$limit = 5;

if (isset($_POST['page_no'])) {
    $page = $_POST['page_no'];
    $offset = ($page - 1) * $limit;
} else {
    $page = 1;
    $offset = 0;
}

$sql = "SELECT * FROM student LIMIT {$offset}, {$limit}";
$query = mysqli_query($con, $sql) or die("Query unsuccessful");

if (mysqli_num_rows($query) > 0) {
    $output = "<tbody>";

    while ($row = mysqli_fetch_assoc($query)) {
        $last_id = $row["id"];
        $output .= "<tr><td>{$row['first_name']} {$row['last_name']}</td> <td><button class='edit-btn' data-eid='{$row["id"]}'>Edit</button></td><td><button class='delete-btn' data-id='{$row["id"]}'>Delete</button></td></tr>";
    }

    $output .= "</tbody><tr><td><button id='ajaxbtn' data-id='{$last_id}'>Load More</button></td></tr>";
    echo $output;
} else {
    echo "";
}

mysqli_close($con);
?>
