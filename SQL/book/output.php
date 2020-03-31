<?php
include("connect.php");
if (!empty($_POST['text']) && !empty($_POST['name'])) {
    (mysqli_query(
        $link,
        "INSERT Into table1 VALUES(NULL, '$_POST[text]', '$_POST[name]')"
    ));
    header('Location: form.php');
}
