$(document).ready(function() {
    $('#load-button').on("click", function(e) {
        $.ajax({
            url: "../Load/ajax-load.php",
            type: "POST",
            success: function(data) {
                $('#table-data').html(data);
            }


        })
    })
});