<?php
$s = $_POST['adress'];
$p = $_POST['name'];
// $tut = file_get_contents($s);
echo preg_match_all("/" . $s . "/iu", $p);