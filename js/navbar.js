$(document).ready(function () {
    console.log(window.location.pathname);

    $(function () {
        if (window.location.pathname == "/portfolio/") {
            $(".nav-page-button").first().addClass("active");
        } else {
            $(".nav-page-button").each(function () {
                if ($(this).find("a").attr("href") == window.location.pathname) {
                    $(this).addClass("active");
                } else {
                    $(this).removeClass("active");
                }
            });
        }
    });
});