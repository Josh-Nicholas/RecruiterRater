var form = $(".steps-validation").show();
$(".steps-validation").steps({
    onFinishing: function (event, currentIndex) {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex) {
        var Name = document.getElementById("Name").value;
        var Full_name = document.getElementById("Full_name").value;
        var Organization = document.getElementById("Organization").value;
        var Pin = document.getElementById("Pin").value;
        var email = document.getElementById("email").value;
        var Password = document.getElementById("Password").value;
        var recaptcha = document.getElementById('g-recaptcha-response').value;
        if ($("#Organization_check").hasClass("validate")) {
            data = {
                action: 'add_new_user_by_form', Company: Organization, Pin: Pin, Name: Name, Full_name: Full_name
                , email: email, Password: Password, recaptcha: recaptcha
            };
            $.post("https://www.proency.com/wp-admin/admin-ajax.php", data, function (response) {
                var Check = JSON.parse(response);
                console.log(Check);
                if (Check.Success == 1) {
                    if (Check.email == 1) {
                        window.location.replace("https://www.proency.com/dashboards/main/");
                    } else {
                        alert("This email is in use, make sure this is your email");
                    }
                } else {
                    $("#Pin_group_flash").fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100)
                    if (Check.Pin_ok == 0 && Check.Block == 0) {
                        $("#Wrong_pin_message").text("Wrong pin, you have " + Check.Remaining_pin_tries + " remaining");
                    }
                    if (Check.Block == 1) {
                        $("#Wrong_pin_message").text("You have entered the wrong pin too many times, wait " + Check.Remaining_time + " Seconds");
                    }
                }
            });
        } else {
            $("#Organization_group_flash").fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100)
        }
    }
});

// Initialize validation
$(".steps-validation").validate({
    ignore: 'input[type=hidden]', // ignore hidden fields
    errorClass: 'danger',
    successClass: 'success',
    highlight: function (element, errorClass) {
        $(element).removeClass(errorClass);
    },
    unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass);
    },
    errorPlacement: function (error, element) {
        error.insertAfter(element);
    },
    rules: {
        email: {
            email: true
        }
    }
});