var projects = [];

var tagElements;
var tags = [];

var tagFilters;

$(document).ready(function () {
    for (let i = 0; i < $(".project").length; i++) {
        projects.push(new Project($(".project").eq(i)));
    }

    // create array for all existing tags
    tagElements = $(".tag");

    for (let i = 0; i < tagElements.length; i++) {
        if (!tags.includes($(tagElements[i]).html())) {
            tags.push($(tagElements[i]).html());
        }
    }

    tags.sort();

    // generate tag filter elements
    $("#tag-filter-list").append("<a href='javascript:void(0)' class='list-group-item active'>All</a>");

    for (let i = 0; i < tags.length; i++) {
        $("#tag-filter-list").append("<a href='javascript:void(0)' class='list-group-item tag-filter active'>" + tags[i] + "</a>");
    }

    tagFilters = $(".tag-filter");

    $(".tag-filter").click(function () {
        let filterTag = $(this).hasClass("active");

        if (filterTag) {
            $(this).removeClass("active");
        } else {
            $(this).addClass("active");
        }

        filter();
    });
});

function selectTag(tag) {
    for (let i = 0; i < tagFilters.length; i++) {
        if ($(tagFilters[i]).html() == tag) {
            $(tagFilters[i]).addClass("active");
        } else {
            $(tagFilters[i]).removeClass("active");
        }
    }

    filter();
}

function filter() {
    let activeTags = [];

    for (let i = 0; i < tagFilters.length; i++) {
        if ($(tagFilters[i]).hasClass("active")) {
            activeTags.push($(tagFilters[i]).html());
        }
    }

    for (let i = 0; i < projects.length; i++) {
        let hidden = true;

        for (let j = 0; j < activeTags.length; j++) {
            if (projects[i].tags.includes(activeTags[j])) {
                $(projects[i].element).slideDown();
                hidden = false;
            }
        }

        if (hidden) {
            $(projects[i].element).slideUp();
        }
    }
}