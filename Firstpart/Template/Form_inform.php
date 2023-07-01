<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Design Example</title>
    <style>
        body {
            background-color: white;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 33.33%;
            margin: 100px auto;
            background-color: lightgray;
            padding: 20px;
        }

        h1 {
            background-color: #0F0CA9;
            color: white;
            text-align: center;
            padding: 10px;
        }

        form {
            margin-top: 20px;
        }

        label {
        
            margin-bottom: 5px;
            font-weight: bold;
        }

      
    </style>
</head>

<body>
    <div class="container" id="table-dat">
        <h1>PHP & AJAX Serialized Form</h1>
        <form id="save_form">
            <label for="first_name">First Name:</label>
            <input type="text" id="first_name" name="first_name">
            <br><br>
            <label for="last_name"> Last Name:</label>
            <input type="text" id="last_name" name="last_name">
           <br><br>
            <input type="submit" name="submit" id="submit-btn" class="btn btn-info" value="Submit">
        </form>
        <div id="response"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="../JS/index.js"></script>
</body>

</html>
