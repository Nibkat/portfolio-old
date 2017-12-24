$(document).ready(function () {
    $(function () {
        if (window.location.pathname.endsWith("index.php")) {
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