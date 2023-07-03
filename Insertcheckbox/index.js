$(document).ready(function() {
    $('#student-form').submit(function(e) {
        e.preventDefault();
        var name = $('#name').val();
        var country = [];
        $(".lang").each(function() {
            if ($(this).is(":checked")) {
                country.push($(this).val());
            }
        });
        country = country.toString();
        if (name !== '' && country.length !== 0) {
            $.ajax({
                url: "insert-data.php",
                method: "POST",
                data: { name: name, country: country },
                success: function(data) {
                    $('#student-form').trigger('reset');
                    alert(data);
                }
            });
        } else {
            alert("Please fill the required fields");
        }
    });
});