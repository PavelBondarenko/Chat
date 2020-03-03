<?php

$arr = [
    "/\:\-\)/",
    "/\:\-\(/"
];

$s = $_POST['smail'];

$arr2 = [
    '<img src="Smiley.png" alt="" width="50px">',
    '<img src="sad.jpg" alt="" width="50px">'
];

echo preg_replace($arr, $arr2, $s);
echo "<br>";
