<?php
function bb_code($text)
{
    $pat = [
        '/\[b\](.*)\[\/b\]/',
        '/\[i\](.*)\[\/i\]/',
        '/\[u\](.*)\[\/u\]/',
    ];

    $replace = [
        "<b>$1</b>",
        "<i>$1</i>",
        "<u>$1</u>"
    ];

    return preg_replace($pat, $replace, $text);
}

function smile($text)
{
    $pat = [
        "/\:\-\)/",
        "/\:\-\(/",
        "/\:\(/",
        "/\:\)/"
    ];
    $replace = [
        '<img src="Smiley.png" alt="" width="50">',
        '<img src="sad.jpg" alt="">'
    ];
    return preg_replace($pat, $replace, $text);
}
function mat($text)
{
    if (preg_match("/(дурак|редиска)/i", $text)) {
        echo "False";
    } else {
        return $text;
    }
}
