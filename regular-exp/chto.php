<?php
$str = $_POST['name'];
$pat = '/^[A-z0-9\-]{1,}@[A-z0-9\-]{2,}\.[A-z]{2,6}$/'; //[alnum] это A-z
if (preg_match($pat, $str)) {
    echo 'да';
} else
    echo 'нет';
