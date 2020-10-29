<?php

$handle = fopen("lonely_nights.txt", "r");

while (($line = fgets($handle)) !== false) {
    $array = explode(':', $line);
    echo "Username: $array[0]";
    echo "<br>";
    echo "Password: $array[1]";
    echo "<br>";
    echo "IP: $array[2]";
    echo "<br>";
    echo "----------------------------------------";
    echo "<br>";
    
}

?>