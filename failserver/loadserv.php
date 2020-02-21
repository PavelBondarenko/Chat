<?php
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    copy($_FILES['userfile']['tmp_name'], "file\\" . $_FILES['userfile']['name']);
}
header("Location: show.php");
// $arr = scandir("file");
// foreach ($arr as $value) {
//     echo "<a href=\"file\\$value\">$value</a>";
//     echo "<br>";
// }
// echo "<br>";
// echo "<br>";
// // $filename =("file\\opros.csv");
// // if (file_exists($filename)) {
// //     echo $filename;
// // }
// $filesize = filesize("file\\downloaded.pdf");
// echo "Размер файла: $filesize";
// echo "<br>";
