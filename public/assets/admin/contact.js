/*=========================================================================================
  File Name: contact.js
  Description: Script related Contact view page.
==========================================================================================*/

(function (window, document, $) {

    // Form Validation for ADD NEW GROUP
	var form = $('#form-contact');
    var error = $('.alert-danger', form);
    var success = $('.alert-success', form);

    $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg != value;
    }, "Please select a country.");

    form.validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        ignore: "",
        rules: {
            first_name: {
                minlength: 2,
                required: true
            },
            last_name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                minlength: 3,
                email: true
            },
            job: {
                required: true,
                minlength: 5,
            },
            company: {
                required: true,
                minlength: 5,
            },
            country: {
                required: true,
                valueNotEquals: "-1"
            },
            message: {
                required: true,
                minlength: 50
            }
        },

        invalidHandler: function (event, validator) { //display error alert on form submit              
            success.hide();
            error.show();
            // App.scrollTo(error, -200);
        },

        highlight: function (element) { // hightlight error inputs
            $(element).closest('.form-control').addClass('has-error'); // set error class to the control group
        },

        unhighlight: function (element) { // revert the change done by hightlight
            $(element).closest('.form-control').removeClass('has-error'); // set error class to the control group
        },

        success: function (label) {
            label.closest('.form-control').removeClass('has-error'); // set success class to the control group
        },

        submitHandler: function (form) {
            $("#overlay").fadeIn(300);
            success.show();
            error.hide();
            form.submit();
        }
    });


    // Refresh form data
    $('form').on('click', '.clear', function(e) {
        location.reload(true);
    });

})(window, document, jQuery);