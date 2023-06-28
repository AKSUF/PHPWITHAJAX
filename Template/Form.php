
<?
include('../CommonArear/commonfunction.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../CSS/style.css">
</head>

<body>
<div class="container">
        <h1 id="title">Add and Fetch Data</h1>
        <div class="form-container">
        <td id="table-form">
            <form action="" id="addform">
                <label for="first-name">First Name:</label>
                <input type="text" id="fname" name="fname" placeholder="Enter your first name">
                <label for="last-name">Last Name:</label>
                <input type="text" id="lname" name="lname" placeholder="Enter your last name">
                <input type="submit" value="Save" id="save-button">
                </form>
        </td>
        </div>
        <div>
        <table>
               <td id="table-data">

               </td>
            </table>
            <div id="error-message"></div>
            <div id="success-message"></div>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
<script src="../JS/index.js"></script>
</body>
</html>
