/*=========================================================================================
  File Name: support.js
  Description: Script related Support view page.
==========================================================================================*/

(function (window, document, $) {

    // Form Validation for ADD NEW GROUP
	var form = $('#form-support');
    var error = $('.alert-danger', form);
    var success = $('.alert-success', form);

    form.validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        ignore: "",
        rules: {
            First_Name: {
                minlength: 2,
                required: true
            },
            Last_Name: {
                required: true,
                minlength: 2
            },
            Email: {
                required: true,
                minlength: 3,
                email: true
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


})(window, document, jQuery);