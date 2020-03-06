<?php
$s = $_POST['adress'];
// $tut = file_get_contents($s);
echo preg_match_all("/\w+ /iu", $s, $match);
print_r($match);
