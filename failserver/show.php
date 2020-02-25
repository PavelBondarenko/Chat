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
        case 'csv':
            $icon = 'img/csv.png';
            break;
        default:
            $icon = 'img/sm.png';
            break;
    }
    $filesize = round(((filesize("file\\$arr[$i]")) / 1024) / 1024, 3) . "Mb";
    echo "<a href='file\\$arr[$i]'><img src='$icon' width='16' height='16' >$arr[$i]</a>
     <a href='cross.php?file=$arr[$i]'><img src='cross.jpg' width='16' height='16'></a>
     <a href='rename.php?file=$arr[$i]'><img src='pan.png' width='20'></a>
     <a href='retext.php?file=$arr[$i]'><img src='red.png' width='20'></a> 
     <a href='view.php?file=$arr[$i]'><img src='view.png' width='20'></a>$filesize <br>";
}
