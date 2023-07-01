<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
.table{
    border: 5px;
    border-color: green;
}
    </style>
</head>
<body>
    <div id="search-bar">
<label for="">Search:</label>
<input type="text" id="search" autocomplete="off">
    </div>


    
    <div id="error-message" class="message"></div>
    <div id="success-message" class="message"></div>
    <div id="table-form">
        <form action="" id="addform">
          Name:  <input type="text" name="name" id="name">
            Age:<input type="text" name="age" id="age">
            Gender:<input type="text" name="gender" id="gender">
            Country:<input type="text" name="country" id="country">
            <input type="submit" name="" value="Save" id="save-button">
        </form>
    </div>
<div id="table-data">
        <table width="40px" cellpadding="10px" class="table">
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Country</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <tbody id="load-table">
            </tbody>
        </table>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="" id="edit_form">
                    <div class="modal-body">

<div>
    <h1>Name</h1>
<input type="text" name="name" id="edit-name">
<input type="text" name="id" id="edit-id" hidden>
</div>
<div>
<h1>Age</h1>
<input type="text" name="age" id="edit-age">
</div>
<div>
<h1>Gender</h1>
<input type="text" name="gender" id="edit-gender">
</div>
<div>
    <h1>Country</h1>
    <input type="text" name="country" id="edit-country">
</div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary" id="edit_submit">Save changes</button>
            </form>            
                    </div>
                </div>
            </div>
        </div>
    </div>



<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="../js/commonfunction.js"></script>
</body>
</html>