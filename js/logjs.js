var userid;
var usename;
var cov = document.querySelector(".cover");
$(document).ready(function() {
    $(".InsertUser").click(function(e) {
        $(".InsertUserInput").css({
            "top": "10%"
        });
        cov.style.zIndex = "4";
        cov.style.opacity = "0.4";

    })

    $(".LogIn").click(function(e) {
        $(".LogInInput").css({
            "top": "25%"
        });
        cov.style.zIndex = "4";
        cov.style.opacity = "0.4";

    })

    $(".CancelLogbut").click(function(e) {
        $(".LogInInput").css({
            "top": "-900px"
        });
        $(".fnamelog").val("");
        cov.style.zIndex = "-1";
        cov.style.opacity = "0.0";
    })


    $(".Cancelbut").click(function(e) {
        $(".InsertUserInput").css({
            "top": "-900px"
        });
        $(".fnameinp").val("");
        cov.style.zIndex = "-1";
        cov.style.opacity = "0.0";
    })



})