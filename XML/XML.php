<?php
include("function_XMl.php");

save_guests_book("data.XML", $_POST['text'], $_POST['name'], date('d-m-y h:i:s'));
echo "<pre>";

print_r(read_xml("data.XML"));
// $date = date("d.m.y h-m-s");
// $str = <<<XML

// <msg>
// <text>$_POST[text]</text>
// <name>$_POST[name]</name>
// <date>$date</date>
// </msg>
// XML;
// file_put_contents("data.XML", $str, FILE_APPEND);
