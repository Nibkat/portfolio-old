var elements = $(".date");
var requests = [];

for (var i = 0; i < elements.length; i++) {
    (function (i) {
        requests[i] = new XMLHttpRequest();

        requests[i].onreadystatechange = function () {
            if (this.readyState == 4 && this.status == 200) {
                $(elements[i]).html(this.responseText);
            }
        };

        requests[i].open("GET", "php/current_date.php?format=" + $(elements[i]).html(), true);
        requests[i].send();
    })(i);
}