<?php
file_put_contents('file/' . $_POST['oldname'], $_POST['name']);
// print_r($_POST);
header("Location: show.php");
