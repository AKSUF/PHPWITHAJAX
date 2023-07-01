<?php
include('../CommonArear/commonfunction.php');
$limit_per_page = 5;
$page = isset($_POST["page_no"]) ? $_POST["page_no"] : 1;
$offset = ($page - 1) * $limit_per_page;

$sql = "SELECT * FROM student LIMIT {$offset}, {$limit_per_page}";
$result = mysqli_query($con, $sql) or die("Query unsuccessful");
$output = "";
if (mysqli_num_rows($result) > 0) {
    $output .= '
    <table border="1" width="100%" cellspacing="0" cellpadding="10px">
    <tr>
    <th width="100px">Id</th>
    <th>Name</th>
    </tr>';
    while ($row = mysqli_fetch_assoc($result)) {
        $output .= "<tr><td align='center'>{$row["id"]}</td><td>{$row["first_name"]}</td><td>{$row["last_name"]}</td></tr>";
    }
    $output .= "</table>";
    $sql_total = "SELECT COUNT(*) AS total FROM student";
    $total_records_result = mysqli_query($con, $sql_total) or die("Query unsuccessful");
    $total_records = mysqli_fetch_assoc($total_records_result)['total'];
    $total_pages = ceil($total_records / $limit_per_page);
    $output .= '<div id="pagination">';
    for ($i = 1; $i <= $total_pages; $i++) {
        $class_name = ($i == $page) ? 'active' : '';
        $output .= "<a class='{$class_name}' id='{$i}' href='../'>{$i}</a>";
    }
    $output .= "</div>";
    echo $output;
} else {
    echo "<h2>No records found</h2>";
}
?>
