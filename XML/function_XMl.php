<?php

function save_guests_book($file, $text, $name, $date)
{
    $xml = "\n<msg>\n\t<text>$text</text>\n\t<name>$name</name>\n\t<date>$date</date>\n</msg>";
    return file_put_contents($file, $xml, FILE_APPEND);
}

function read_xml($file)
{
    preg_match_all(
        "/<msg>.*?<text>(.*?)<\/text>.*?<name>(.*?)<\/name>.*?<date>(.*?)<\/date>.*?<\/msg>/ius",
        file_get_contents($file),
        $arr_tags
    );

    $arr = [];

    foreach ($arr_tags[1] as $key => $value) {
        $arr[$key]['text'] = $value;
        $arr[$key]['name'] = $arr_tags[2][$key];
        $arr[$key]['date'] = $arr_tags[3][$key];
    }
    return $arr;
}
