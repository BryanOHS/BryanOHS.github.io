$(document).ready(function (e) {

    let $uploadfile = $('#register .upload-profile-img input[type="file"]');

    $uploadfile.change(function () {
        readURL(this);
    });




});

function readURL(input) {
    if(input.files && input.files[0]){
        let reader = new FileReader();
        reader.onload = function (e) {
            $("#register .upload-profile-img .profile-img").attr('src', e.target.result);
            $("#register .upload-profile-img .camera-icon").css({display: "none"});
        }

        reader.readAsDataURL(input.files[0]);

    }
}