<?php
$s = $_POST['adress'];
// $tut = file_get_contents($s);
preg_match_all("/\w+ /iu", $s, $match);
// print_r($match);
foreach ($match[0] as $words) {
    $arr[$words]++;
}
foreach ($arr as $key => $value) {
    echo sort($value) . "-" . $key . "раза" . "<br>";
}
