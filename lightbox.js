$(document).ready(function () {
    $(document).keyup(function (event) {
        if (event.which == 27) {
            hideLightbox();
        }
    });

    $("#lightbox").click(function () {
        hideLightbox();
    });
});

function showLightbox(img) {
    disableScroll();
    $("#lightbox-image").attr("src", $(img).attr("src"));
    $("#lightbox").css("top", "0");
}

function hideLightbox() {
    enableScroll();
    $("#lightbox").css("top", "100vh");
}