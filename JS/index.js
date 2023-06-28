$(document).ready(function() {

    function loadTable() {
        $.ajax({
            url: "../Load/ajax-load.php",
            type: "POST",
            success: function(data) {
                $("#table-data").html(data);
            },
            error: function() {
                alert("Error occurred while fetching record.");
            }
        });
    }
    loadTable();


    $('#save-button').on("click", function(e) {
        e.preventDefault();
        var fname = $("#fname").val();
        var lname = $("#lname").val();
        if (fname == "" || lname == "") {
            $("#error-message").html("Al fields are required.").slideDown();
            $("#success-message").slideUp();
        } else {
            $.ajax({
                url: "../Load/ajax-insert.php",
                type: "POST",
                data: { first_name: fname, last_name: lname },
                success: function(data) {
                    if (data == 1) {
                        loadTable();
                        $("#addform").trigger("reset");
                        $("#success-message").html("Data insrted successfully").slideDown();
                        $("#error-message").slideUp();
                    } else {
                        $("#error-message").html("Al fields are required.").slideDown();
                        $("#success-message").slideUp();
                    }
                },

            });



        }

    });
});