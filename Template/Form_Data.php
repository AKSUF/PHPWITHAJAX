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

        input,
        select {
            width: 100%;
            padding: 5px;
            margin-bottom: 10px;
        }

        ul {
            list-style-type: disc;
            margin-left: 20px;
        }

        input {
            padding: 10px 20px;
            background-color: #0F0CA9;
            color: white;
            border: none;
            cursor: pointer;
            text-align: center;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="container" id="table-dat">
        <h1>PHP & AJAX Serialized Form</h1>
        <form id="submit">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name">

            <label for="age">Age:</label>
            <input type="text" id="age" name="age">

            <label for="gender">Gender:</label>
           
                <input type="radio" id="male" name="gender" value="male"> <label for="male">Male</label>
                <input type="radio" id="female" name="gender" value="female"> <label for="female">Female</label>
        <br><br>

            <label for="country">Country:</label>
            <select id="country" name="country">
                <option value="us">United States</option>
                <option value="uk">United Kingdom</option>
                <option value="ca">Canada</option>
                <option value="au">Australia</option>
            </select>
            <input type="submit" name="submit" id="submit-btn" class="btn btn-info" value="Submit">
        </form>
        <div id="response"></div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="../JS/index.js"></script>
</body>

</html>
