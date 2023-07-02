$(document).ready(function() {
    function loadData(type, category_id) {
        $.ajax({
            url: "load.php", // Update the URL to point to the correct PHP file
            type: "POST",
            data: {
                type: type,
                id: category_id
            },
            success: function(data) {
                if (type == "stateData") {
                    $("#state").append(data);
                } else {
                    $("#country").append(data);
                }
            }
        });
    }

    loadData();
    $("#country").on("change", function() {
        var country = $("#country").val();
        if (country != "") {
            loadData("stateData", country);
        } else {
            $("#state").html("");
        }
    })
});