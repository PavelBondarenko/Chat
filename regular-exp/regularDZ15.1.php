<?php
$s = $_POST['word'];
$arr = file_get_contents('words.txt');
if (preg_match("/$arr/i", $s)) {
    echo "Мат, соблюдайте культурность";
} else {
    echo $s;
}
