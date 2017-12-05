$(document).ready(function () {
    $("#yearOneFlip").click(function () {
        $("#yearOnePanel").slideToggle("medium");
    });

    $("#yearTwoFlip").click(function () {
        $("#yearTwoPanel").slideToggle("medium");
    });

    $(function toTop() {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#top-button').css("bottom", "15px");
            } else {
                $('#top-button').css("bottom", "-50px");
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

var twemojis = document.getElementsByClassName("twemoji");

for (i = 0; i < twemojis.length; i++) {
    twemojis[i].innerHTML = twemoji.parse(twemojis[i].innerHTML, {
        folder: 'svg',
        ext: '.svg'
    });
}