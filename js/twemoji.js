var twemojis = $(".emoji");

for (i = 0; i < twemojis.length; i++) {
    twemojis[i].innerHTML = twemoji.parse(twemojis[i].innerHTML, {
        folder: 'svg',
        ext: '.svg'
    });
}