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
        //show success or error message
    function message(message, status) {
        if (status == true) {
            $("#success-message").html(message).slideDown();
            $("#error-message").slideUp();
            setTimeout(function() {
                $("#success-message").slideUp();
            }, 4000);
        } else if (status == false) {
            $("#error-message").html(message).slideDown();
            $("#success-message").slideUp();
            setTimeout(function() {
                $("#error-message").slideUp();
            }, 4000);
        }
    }
    //function for more to JSON object
    function jsonData(targetForm) {
        var arr = $(targetForm).serializeArray();
        var obj = {};
        for (var a = 0; a < arr.length; a++) {
            if (arr[a].value == "") {
                return false;
            }
            obj[arr[a].name] = arr[a].value;
        }
        var json_string = JSON.stringify(obj);
        return json_string;
    }
    //insert new record
    $("#save-button").on("click", function(e) {
            e.preventDefault();
            var jsonObject = jsonData("#addform");
            if (jsonObject == false) {
                message("All fields are required", false);
            } else {
                $.ajax({
                    url: "http://localhost/PHPAJAX/Restpart/api_post.php",
                    type: "POST",
                    data: jsonObject,
                    success: function(data) {
                        message(data.message, data.status);
                        if (data.status == true) {
                            loadtable();
                            $("#addform").trigger("reset");
                        }
                    }
                })
            }
            console.log(jsonObject);
        })
        //edit record
    $("#edit_submit").on("click", function(e) {
        e.preventDefault();
        var jsonObject = jsonData("#edit_form");
        if (jsonObject == false) {
            message("All fields are required", false);
        } else {
            $.ajax({
                url: "http://localhost/PHPAJAX/Restpart/api_edit.php",
                type: "POST",
                data: jsonObject,
                success: function(data) {
                    message(data.message, data.status);
                    if (data.status == true) {
                        loadtable();
                        $("#exampleModal").modal("hide"); // Hide the modal after successful update
                    }
                }
            })
        }
        console.log(jsonObject);
    })

    $(document).on("click", ".delete-btn", function() {
        if (confirm("Do you realy want to delete this record")) {
            var id = $(this).data("id");
            var obj = { id: id };
            var myJson = JSON.stringify(obj);
            var row = this;
            $.ajax({
                url: 'http://localhost/PHPAJAX/Restpart/api_delete.php',
                type: "POST",
                data: myJson,
                success: function(data) {
                    message(data.message, data.status);
                    if (data.status == true) {
                        $(row).closest("tr").fadeOut();
                    }
                }
            })
        }

    })
    $("#search").on("keyup", function() {
        var search_term = $(this).val();
        $("#load_table").html("");
        $.ajax({
            url: 'http://localhost/PHPAJAX/Restpart/api_search.php?search=' + search_term,
            type: "GET",
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
        })
    })


});