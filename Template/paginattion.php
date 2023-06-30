<?php
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
        <div id="search-bar">
            <label for="search"></label>
            <input type="text" id="search" autocomplete="off">
        </div>
        <div class="form-container">
            <form action="" id="addform">
                <label for="first-name">First Name:</label>
                <input type="text" id="fname" name="fname" placeholder="Enter your first name">
                <label for="last-name">Last Name:</label>
                <input type="text" id="lname" name="lname" placeholder="Enter your last name">
                <input type="submit" value="Save" id="save-button">
            </form>
        </div>
        <div>
            <table>
                <tbody id="table-data">

                </tbody>
            </table>
            <div id="error-message"></div>
            <div id="success-message"></div>
            <div id="modal">
                <div id="modal-form">
                    <h2>Edit form</h2>
                    <div id="close-button">X</div>     
                    <table cellpadding="10px" width="100%">
                        <tr>
                            <td>First Name</td>
                            <td><input type="text" id="edit-fname"></td>
                        </tr>
                        <tr>
                            <td>Last Name</td>
                            <td><input type="text" id="edit-lname"></td>
                        </tr>
                        <tr>
                            <td colspan="2"><input type="submit" id="edit-submit" value="Save"></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="../JS/index.js"></script>
</body>

</html>