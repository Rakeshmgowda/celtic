$(document).ready(function () {
    $('#table_id').DataTable();
    $(".btn-menu").click(function () {
        $(this).toggleClass("active");
        $(".leftsidebar").toggleClass("active");
    });
    $(".form-cls .form-control").blur(function () {
        var inputVal = $(this).val();
        if (inputVal != "") {
            $(this).parent(".form-group").addClass("active");
        }
        else {
            $(this).parent(".form-group").removeClass("active");
        }
    });
$(".nav-link").click(function(){
    $(".nav-link").removeClass("active");
    $(this).addClass("active");
    
});

$(".profile-pic").change(function(){
    filePreview(this);
});
    $(".edit").click(function(){
        $(".profile-edit-details").addClass("eidt-active");
    });
 $(".save").click(function(){
         $(".profile-edit-details").removeClass("eidt-active");
    });
     $(".cancel").click(function(){
        $(".profile-edit-details").removeClass("eidt-active");
    });
});
    
    
  function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {               
                $(".profile-img").attr("src", e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }