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
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #0F0CA9;
            color: white;
            border: none;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>PHP & AJAX Serialized Form</h1>
        <form id="submit_form" method="post" action="./save-form.php">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="age">Age:</label>
            <input type="text" id="age" name="age">

            <label for="age">City:</label>
            <input type="text" id="city" name="city">
            <input type="submit" value="Submit" id="submit">
        </form>
    </div>
</body>

</html>
