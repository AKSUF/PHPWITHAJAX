$(document).ready(function() {
    $("#city-box").keyup(function() {
        var country = $(this).val();
        if (country != '') {
            $.ajax({
                url: "load-city.php",
                method: "POST",
                data: { country: country },
                success: function(data) {
                    $("#countryList").fadeIn("fast").html(data);
                }
            });
        } else {
            $("#countryList").fadeOut("fast").html("");
        }
    });

    $(document).on('click', '#countryList li', function() {
        $('#city-box').val($(this).text());
        $("#countryList").fadeOut();
    });

    $("#search-btn").on("click", function(e) {
        e.preventDefault();
        var country = $('#city-box').val();
        if (country == "") {
            alert("Please enter the city");
        } else {
            $.ajax({
                url: "load-table.php",
                method: "POST",
                data: { country: country },
                success: function(data) {
                    $("#tabledata").html(data);
                }
            });
        }
    });
});