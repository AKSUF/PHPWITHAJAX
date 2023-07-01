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

    // $.getJson(
    //     "fetchs-json.php",
    //     function(data) {
    //         $.each(data, function(key, value) {
    //             $("#loaded-data").append(value.id + "" + value.first_name + "" + value.last_name);

    //         })
    //     }

    // )
    $.getJSON({
        url: "../fetchs_json.php",
        type: "POST",
        data: { id: 1 },
        dataType: "JSON",
        success: function(data) {
            $.each(data, function(key, value) {
                $("#loaded_data").append(value.id + " " + value.first_name + " " + value.last_name);
            });
        }
    });
})