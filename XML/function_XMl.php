<?php

function save_guests_book($text, $name, $date)
{
    $guests_book = "<msg><text>$text</text><name>$name</name><date>$date</date></msg>";
    return file_put_contents($guests_book);
}
