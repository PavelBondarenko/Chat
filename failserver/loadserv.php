<?php
if (is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    copy($_FILES['userfile']['tmp_name'], "file\\" . $_FILES['userfile']['name']);
}
$arr = scandir("file");
foreach ($arr as $value) {
    echo "<a href=\"file\\$value\">$value</a>";
}
