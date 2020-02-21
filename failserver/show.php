<?php
$arr = scandir("file");

for ($i = 2; $i < count($arr); $i++) {
    switch (explode(".", $arr[$i])[1]) {
        case 'docx':
            $icon = 'img/docx.png';
            break;
        case 'pdf':
            $icon = 'img/pdf.png';
            break;
        default:
            $icon = 'img/sm.png';
            break;
    }
    $filesize = filesize("file\\$arr[$i]");
    echo "<a href='file\\$arr[$i]'><img src='$icon' width='16' height='16' >$arr[$i]</a> <a href='cross.php?file=$arr[$i]'><img src='cross.jpg' width='16' height='16'></a>><a href='rename.php'><img src='pan.png?file=$arr[$i]'></a> $filesize <br>";
}
