$(document).ready(function () {
    $("#flip").click(function () {
        $("#panel").slideToggle("medium");

        /*if ($("#arrow").css("transform") == "matrix(6.12323e-17, 1, -1, 6.12323e-17, 0, 0)")
            $("#arrow").css("transform", "rotate(-90deg)");
        else
            $("#arrow").css("transform", "rotate(90deg)");*/
    });
});