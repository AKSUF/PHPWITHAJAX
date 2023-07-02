$(document).ready(function() {
    function loadData() {
        $.ajax({
            url: "load-data.php",
            type: "POST",
            success: function(data) {
                $("#table-data").html(data);
            }
        });
    }
    loadData();

    $("#delete-btn").on("click", function() {
        var ids = [];
        $("input[type=checkbox]:checked").each(function() {
            ids.push($(this).val());
        });
        if (ids.length === 0) {
            alert("Please select at least one checkbox.");
        } else {
            if (confirm("Do you really want to delete these records?")) {
                $.ajax({
                    url: "delete-data.php",
                    type: "POST",
                    data: { ids: ids },
                    success: function(data) {
                        if (data == 1) {
                            $("#success-message").html("Data deleted successfully").slideDown();
                            $("#error-message").slideUp();
                        } else {
                            $("#error-message").html("Could not delete data").slideDown();
                            $("#success-message").slideUp();
                        }
                    }
                });
            }
        }
    });
});