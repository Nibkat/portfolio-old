$(document).ready(function () {
    var projects = [];

    for (let i = 0; i < $(".project").length; i++) {
        projects.push(new Project($(".project").eq(i)));
    }

    var tagElements = $(".tag");
    var allTags = [];

    for (let i = 0; i < tagElements.length; i++) {
        if (!allTags.includes($(tagElements[i]).html())) {
            allTags.push($(tagElements[i]).html());
        }
    }

    allTags.sort();

    $("#tag-list").append("<a href='javascript:void(0)' class='list-group-item active'>All</a>");

    for (let i = 0; i < allTags.length; i++) {
        $("#tag-list").append("<a href='javascript:void(0)' class='list-group-item active'>" + allTags[i] + "</a>");
    }

    $(".list-group-item").click(function () {
        let hide = false;

        if ($(this).hasClass("active")) {
            $(this).removeClass("active");
            hide = true;
        } else {
            $(this).addClass("active");
            hide = false;
        }

        for (let i = 0; i < projects.length; i++) {
            if (projects[i].tags.includes($(this).html())) {
                if (hide) {
                    $(projects[i].element).slideUp();
                } else {
                    $(projects[i].element).slideDown();
                }
            }
        }
    });
});