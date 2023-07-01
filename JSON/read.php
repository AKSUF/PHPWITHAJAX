<?php
$json_string='./record.json';
$jsondata=file_get_contents($json_string);
$arr=json_decode($jsondata,true);

echo '<table border="1" cellpadding="10px" width="100%">';
foreach ($arr as list('id'=>$id,"title"=>$title,"body"=>$body)){
    echo  "<tr>
    <td>$id</td>
    <td>$title</td>
    <td>$body</td>
    </tr>";
}

echo '</table>';
?>