$(document).ready(function () {
    // forgit password page jquery start
    $(".emailSub").click(function (e) { 
        e.preventDefault();
        $("#forgitPass").addClass('d-none');
        $("#newPass").addClass('d-none');
        $("#OTP").removeClass("d-none");
    });
    $("#otpSub").click(function (e) { 
        e.preventDefault();
        $("#OTP").addClass("d-none");
        $("#newPass").removeClass("d-none");
    });
    // forgit password page jquery end

});
