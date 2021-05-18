/*=========================================================================================
  File Name: auth.js
  Author: Amin
  Description: Script related setting view page.
==========================================================================================*/

(function (window, document, $) {

    // Profile Photo Upload func
    function userPhoto(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#user_photo').attr('src', '');
                $('#user_photo').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $("#account-upload").change(function(){
        userPhoto(this);
    });
    $('.change-avatar-img-btn').on('click', function(e) {
        $("#account-upload").click();
    });


    // User delete func
    $('#btn-alert').on('click', function(e) {

        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert your account again !",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!",
            confirmButtonClass: "btn btn-primary",
            cancelButtonClass: "btn btn-danger ml-1",
            buttonsStyling: false
        }).then(function(result) {
        
            if (result.value) {

                $("#btn-delete").click();
            }
        });
    });

})(window, document, jQuery);