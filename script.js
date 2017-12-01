$(document).ready(function () {
    $("#yearOneFlip").click(function () {
        $("#yearOnePanel").slideToggle("medium");
    });

    $("#yearTwoFlip").click(function () {
        $("#yearTwoPanel").slideToggle("medium");
    });

    $("#top-button").hide();
    $(function toTop() {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#top-button').fadeIn("medium");
            } else {
                $('#top-button').fadeOut("medium");
            }
        });

        $('#top-button').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 400);
            return false;
        });
    });
});

function scrollToId(id, speed = 400) {
    $('html, body').animate({
        scrollTop: $(id).offset().top
    }, speed);
}