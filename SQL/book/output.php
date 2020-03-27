<?php
include("connect.php");
if (!empty($_POST['name']) && !empty($_POST['text'])) {
    (mysqli_query(
        $link,
        "INSERT Into table1 VALUES(NULL, '$_POST[text]', '$_POST[name]')"
    ));
    header('Location: form.php');
}
