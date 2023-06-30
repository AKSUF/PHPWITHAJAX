$(document).ready(function() {
    function loadTable() {
        $.ajax({
            url: "../Load/ajax-load.php",
            type: "POST",
            success: function(data) {
                $("#table-data").html(data);
                setupDeleteButtons(); // Call the setupDeleteButtons function after loading the table data
            },
            error: function() {
                alert("Error occurred while fetching record.");
            }
        });
    }

    loadTable();


    $(document).on("click", ".delete-btn", function() {
        var studentId = $(this).data("id");
        var element = this;
        console.log(this);
        $.ajax({
            url: "../Load/ajax-delete.php",
            type: "POST",
            data: { id: studentId },
            success: function(data) {
                console.log(data);
                if (data == 1) {
                    $(element).closest("tr").fadeOut();
                } else {
                    $("#error-message").html("Can't delete record").slideDown();
                    $("#success-message").slideUp();
                }
            }
        });
    });



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




    $(document).on("click", ".edit-btn", function() {
        $("#modal").show();
        var studentId = $(this).data("eid");
        $.ajax({
            url: "../Load/load-update-form.php",
            type: "POST",
            data: {
                id: studentId
            },
            success: function(data) {
                $('#modal-form table').html(data);
            }


        })
    })


    $('#close-button').on("click", function() {
        $("#modal").hide();
    });

    $(document).on("click", "#edit-submit", function() {
        var stuId = $('#edit-id').val();
        var fname = $('#edit-fname').val();
        var lname = $('#edit-lname').val();
        $.ajax({
            url: "../Load/ajax-update-form.php",
            type: "POST",
            data: {
                id: stuId,
                first_name: fname,
                last_name: lname
            },
            success: function(data) {
                $("#modal").hide();
                loadTable();
            }
        });
    });

    $('#search').on("keyup", function() {
        var search_term = $(this).val();
        $.ajax({
            url: "../Load/ajax-live-search.php",
            type: "POST",
            data: { search: search_term },
            success: function(data) {
                $("#table-data").html(data);
            }
        })
    });
    //pagintion
    function loadTable(page) {
        $.ajax({
            url: '../Load/ajax-pagination.php',
            type: "POST",
            data: { page_no: page },
            success: function(data) {
                $('#table-data').html(data);
            }
        });
    }

    loadTable(1); // You can provide a default page number or adjust it as per your requirements.

    $(document).on("click", "#pagination a", function(e) {
        e.preventDefault();
        var page_id = $(this).attr("id");
        loadTable(page_id);
    });
    //load pagination
    function loadesrTable(page) {
        $.ajax({
            url: "../Load/ajaxload_paination.php",
            type: "POST",
            data: {
                page: page
            },
            success: function(data) {
                if (data) {
                    $('#pagination').remove();
                    $("#loadData").append(data);
                } else {
                    $("#ajaxbtn").prop("disabled", true);
                }

            }
        })
    }
    loadesrTable();
    $(document).on("click", "#ajaxbtn", function() {
        var pid = $(this).data("id");
        loadesrTable(pid);
    });


});