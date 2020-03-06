<?php
function bb_code($text)
{
    $pat = [
        '/\[b\](.*)\[\/b\]/',
        '/\[i\](.*)\[\/i\]/',
        '/\[u\](.*)\[\/u\]/',
        '/\[IMG\](.*)\[\/IMG\]/',
    ];

    $replace = [
        "<b>$1</b>",
        "<i>$1</i>",
        "<u>$1</u>",
        "<img src='$1'>"
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
        '<img src="BBCode\Smiley.png" width="35">',
        '<img src="BBCode\sadd.png"  width="35">',
        '<img src="BBCode\sad2.png" width="35">',
        '<img src="BBCode\happy2.png" width="35">'
    ];
    return preg_replace($pat, $replace, $text);
}
function mat($text)
{
    if (preg_match("/(дурак|редиска)/iu", $text)) {
        echo "False";
    } else {
        return $text;
    }
}

function md($text)
{
    $pat = [
        '/\*\*(.*)\*\*/',
        '/\*(.*)\*/',
        // '//'

    ];
    $replace = [
        "<b>$1</b>",
        "<i>$1</i>",


    ];
    return preg_replace($pat, $replace, $text);
}
// function img($text)
// {
//     $pat = [
        
//     ]

// }
