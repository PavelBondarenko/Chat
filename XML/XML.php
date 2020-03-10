<?php
$date = date("d.m.y h-m-s");
$str = <<<XML

<msg>
<text>$_POST[text]</text>
<name>$_POST[name]</name>
<date>$date</date>
</msg>
XML;
file_put_contents("data.XML", $str, FILE_APPEND);
