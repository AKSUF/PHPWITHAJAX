$(document).ready(function() {
    $.ajax({
        url: "./load-city.php",
        type: "POST",
        dataType: "JSON",
        success: function(data) {
            $.each(data, function(key, value) {
                $('#country-box').append("<option value='" +
                    value.country + "'>" + value.country + "</option>");
            });
        }
    });
    $('#country-box').change(function() {
        var country = $(this).val();
        if (country == "") {
            $("#table-data").html("");
        } else {
            $.ajax({
                url: "load-table.php",
                type: "POST",
                data: { country: country },
                success: function(data) {
                    $("#table-data").html(data);
                }
            });
        }
    });
});