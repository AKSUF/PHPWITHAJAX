$(document).ready(function() {
    $.ajax({
        url: "https://jsonplaceholder.typicode.com/posts",
        type: "GET",
        success: function(data) {
            $("#loads-data").append
                // $("#loads-data").append(data.id + "" + data.title + "" + data.body);
            $.each(data, function(key, value) {
                $("#loads-data").append(value.id + "." + value.title + "</br>");
            })
        }

    })
})