<?php
$file = "counter.txt";

$count = file_exists($file)? (int)file_get_contents($file) : 0;

if(!isset($_COOKIE["visited"])){
    $count++;

    file_put_contents($file, $count);

    setcookie("visited","yes");
}

echo "Visitors: $count";