/*=========================================================================================
  File Name: auth.js
  Author: Amin
  Description: Script related Auth view page.
==========================================================================================*/

(function (window, document, $) {

	//Login Register Validation
	if($("form.form-horizontal").attr("novalidate")!=undefined){
		$("input,select,textarea").not("[type=submit]").jqBootstrapValidation();
	}

    $.validator.addMethod("valueNotEquals", function(value, element, arg){
        return arg != value;
    }, "Value must not equal arg.");

    // Form Validation for Login PART
    var form_login = $('#form-login');
    var error = $('.alert-danger', form_login);
    var success = $('.alert-success', form_login);
    form_login.validate({

        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        ignore: "",
        rules: {
            input_user_photo: {
                extension: "jpg|jpeg|png|gif|svg",
                filesize: 5242880, // 5 Mbyte
                required: true
            },
            username: {
                minlength: 3,
                required: true
            },
            name: {
                minlength: 3,
                required: true
            },
            email: {
                minlength: 6,
                email: true,
                required: true
            },
            company: {
                required: true,
                minlength: 2,
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

        submitHandler: function (form_login) {
            $("#overlay").fadeIn(300);
            success.show();
            error.hide();

            form_login.submit();
            // alert('On progressing now.');
        }
    });


    // Form Validation for PASSWORD RESET PART
    var form_signup = $('#form-signup');
    var error_r = $('.alert-danger', form_signup);
    var success_r = $('.alert-success', form_signup);
    form_signup.validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        ignore: "",
        rules: {
            name: {
                minlength: 3,
                required: true
            },
            surname: {
                minlength: 3,
                required: true
            },
            email: {
                minlength: 6,
                email: true,
                required: true
            },
            password: {
                minlength: 5,
                required: true
            },
            password_confirmation: {
                minlength: 5,
                required: true
            },
            username: {
                minlength: 3,
                required: true
            }
        },

        invalidHandler: function (event, validator) { //display error alert on form submit              
            success_r.hide();
            error_r.show();
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

        submitHandler: function (form_signup) {
            $("#overlay").fadeIn(300);
            success_r.show();
            error_r.hide();
            form_signup.submit();
        }
    });


    $('.btn-individual').on('click', function(e) {
        $(".btn-individual").removeClass("btn-individual-unchecked");
        $(this).addClass("btn-individual-checked");

        $('.btn-business').addClass("btn-business-unchecked");
        $(".btn-business").removeClass("btn-business-checked");

        $("input[name='account_type']").val('Individual');
    });

    $('.btn-business').on('click', function(e) {
        $(".btn-business").removeClass("btn-business-unchecked");
        $(this).addClass("btn-business-checked");

        $('.btn-individual').addClass("btn-individual-unchecked");
        $(".btn-individual").removeClass("btn-individual-checked");

        $("input[name='account_type']").val('Business');
    });

})(window, document, jQuery);