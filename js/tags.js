$(document).ready(function () {
    var tagElements = $(".tag");
    var tags = [];

    for (let i = 0; i < tagElements.length; i++) {
        if (!tags.includes($(tagElements[i]).html())) {
            tags.push($(tagElements[i]).html());
        }
    }

    tags.sort();

    for (let i = 0; i < tags.length; i++) {
        console.log(tags[i]);
    }
});