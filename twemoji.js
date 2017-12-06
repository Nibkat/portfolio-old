var twemojis = document.getElementsByClassName("twemoji");

for (i = 0; i < twemojis.length; i++) {
    twemojis[i].innerHTML = twemoji.parse(twemojis[i].innerHTML, {
        folder: 'svg',
        ext: '.svg'
    });
}