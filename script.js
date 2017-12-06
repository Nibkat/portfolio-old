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

        $(document).keyup(function (event) {
            console.log("Handler for .keypress() called.");

            if (event.which == 27) {
                hideLightbox();
            }
        });

        $("#lightbox").click(function () {
            hideLightbox();
        });
    });
});

function scrollToId(id, speed = 400) {
    $('html, body').animate({
        scrollTop: $(id).offset().top
    }, speed);
}

function showLightbox(img) {
    $("#lightbox-image").attr("src", $(img).attr("src"));
    $("#lightbox").css("top", "0");
}

function hideLightbox() {
    $("#lightbox").css("top", "100vh");
}

var twemojis = document.getElementsByClassName("twemoji");

for (i = 0; i < twemojis.length; i++) {
    twemojis[i].innerHTML = twemoji.parse(twemojis[i].innerHTML, {
        folder: 'svg',
        ext: '.svg'
    });
}