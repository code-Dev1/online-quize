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
window.addEventListener('DOMContentLoaded', event => {

    // Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});