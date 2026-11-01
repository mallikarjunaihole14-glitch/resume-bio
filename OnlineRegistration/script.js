
$(document).ready(function() {

    $("#regForm").submit(function(event) {

        var name = $("#fullname").val().trim();
        var mobile = $("#mobile").val().trim();

        if (name.length < 3) {
            alert("Please enter a valid full name.");
            event.preventDefault();
            return;
        }

        if (!/^[0-9]{10}$/.test(mobile)) {
            alert("Please enter a valid 10 digit mobile number.");
            event.preventDefault();
            return;
        }

    });

});
