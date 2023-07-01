$(document).ready(function() {
    function loadtable() {
        $.ajax({
            url: 'http://localhost/PHPAJAX/Restpart/api_fetch.php',
            type: 'GET',
            success: function(data) {
                if (data.status == false) {
                    $("#load-table").append("<tr><td colspan='6'><h2>" +
                        data.message + "</h2></td></tr>");
                } else {
                    $.each(data, function(key, value) {
                        $("#load-table").append("<tr>" +
                            "<td>" + value.id + "</td>" +
                            "<td>" + value.name + "</td>" +
                            "<td>" + value.age + "</td>" +
                            "<td>" + value.gender + "</td>" +
                            "<td>" + value.country + "</td>" +
                            "<td><button class='edit-btn' data-eid='" +
                            value.id + "'>Edit</button></td>" +
                            "<td><button class='delete-btn' data-id='" +
                            value.id + "'>Delete</button></td>" +
                            "</tr>");
                    });
                }
            }
        });
    }
    loadtable();

    // Fetch single record: show in modal box
    $(document).on("click", ".edit-btn", function() {
        $("#exampleModal").modal('show');
        var studentId = $(this).data("eid");
        var obj = { id: studentId }
        var myJSON = JSON.stringify(obj);
        $.ajax({
            url: 'http://localhost/PHPAJAX/Restpart/api_fetch_one.php',
            type: 'POST',
            data: myJSON,
            success: function(data) {
                $("#edit-id").val(data[0].id);
                $("#edit-name").val(data[0].name);
                $("#edit-age").val(data[0].age);
                $("#edit-gender").val(data[0].gender);
                $("#edit-country").val(data[0].country);
            }
        })
    });

    // Hide modal box
    $("#exampleModal").on("hide.bs.modal", function() {
        // Perform any additional actions when the modal is hidden
    });
    //fetch single record:show in modal box
    $(document).on("click", "")
        //function for more to JSON object



    //insert new record
    $("#save-button").on("click", function(e) {
        e.preventDefault();
        var arr = $("#addform").serializeArray();
        var obj = {};
        for (var a = 0; a < arr.length; a++) {
            obj[arr[a].name] = arr[a].value;
        }
        var json_string = JSON.stringify(obj);
        console.log(json_string);
    })

});