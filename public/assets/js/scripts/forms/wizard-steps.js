/*=========================================================================================
    File Name: wizard-steps.js
    Description: wizard steps page specific js
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Wizard tabs with numbers setup
$(".number-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Wizard tabs with icons setup
$(".icons-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});

// Vertical tabs form wizard setup
$(".vertical-tab-steps").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    stepsOrientation: "vertical",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onFinished: function (event, currentIndex) {
        alert("Form submitted.");
    }
});
var form = $(".steps-validation").show();
$(".steps-validation").steps({
    headerTag: "h6",
    bodyTag: "fieldset",
    transitionEffect: "fade",
    titleTemplate: '<span class="step">#index#</span> #title#',
    labels: {
        finish: 'Submit'
    },
    onStepChanging: function (event, currentIndex, newIndex) {
        if (currentIndex > newIndex) {
            return true;
        }
        if (currentIndex == 0) {
            var Password = document.getElementById("Password").value;
            var Password_check = document.getElementById("Password_check_input").value;
            if (Password_check == Password) {
                var Password_block = 0;
            } else {
                $("#Password_group_flash").fadeOut(100).fadeIn(100).fadeOut(100).fadeIn(100)
                $("#Wrong_password_message").text("Your passwords do not match");
                var Password_block = 1;
            }
        }
        if (Password_block == 1) {
            return false;
        } else {
            form.validate().settings.ignore = ":disabled,:hidden";
            return form.valid();
        }
    },
    onFinishing: function (event, currentIndex) {
        form.validate().settings.ignore = ":disabled";
        return form.valid();
    },
    onFinished: function (event, currentIndex) {
        grecaptcha.ready(function () {
            grecaptcha.execute('6LcMpUQaAAAAAJLbo5mQSTWnoR1f6SeGfpMMpvHk', {
                action: 'Register_new_user'
            })
                .then(function (token) {
                    var Name = document.getElementById("Name").value;
                    var Full_name = document.getElementById("Full_name").value;
                    var Organization = document.getElementById("Organization").value;
                    var Pin = document.getElementById("Pin").value;
                    var email = document.getElementById("email").value;
                    var Password = document.getElementById("Password").value;
                    var recaptcha = token;
                    if ($("#Organization_check").hasClass("validate")) {
                        data = {
                            action: 'add_new_user_by_form', Company: Organization, Pin: Pin, Name: Name, Full_name: Full_name
                            , email: email, Password: Password, recaptcha: recaptcha
                        };
                        $.post("https://www.proency.com/wp-admin/admin-ajax.php", data, function (response) {
                            var Check = JSON.parse(response);
                            console.log(Check);
                            if (Check.Pin_ok == 1) {
                                if (Check.Success == 1) {
                                    window.location.replace("https://www.proency.com/dashboards/main/");
                                } else if (Check.email==0) {
                                    alert("This email is in use, make sure this is your email");
                                } else {
                                    alert("something went wrong please try again later");
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
                });
        });
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


// Initialize plugins
// ------------------------------

// Pick a date
$('.pickadate').pickadate();

// Date & Time Range
$('.datetime').daterangepicker({
    timePicker: true,
    timePickerIncrement: 30,
    locale: {
        format: 'MM/DD/YYYY h:mm A'
    }
});