<?php
// $old_file = ('file/' . $_GET['file']);
// $new_file = $_GET['name'];
// rename($old_file, $new_file);
rename('file//' . $_POST['oldname'], 'file//' . $_POST['name']) . "." . $_POST['ext'];
// print_r($_POST);
header("Location: show.php");
