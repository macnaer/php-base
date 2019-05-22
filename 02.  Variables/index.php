<?php

$a = 10;
echo $a;
echo "<br/>";

echo isset($a);

echo "<br/>";
echo gettype($a);

$a = (double) $a;
echo "<br/>";
echo gettype($a);
echo "<br/>";
//unset($a);
echo "After unset" . $a;
echo "<br/>";
$name = "Bill";
echo is_string($name);
echo "<br/>";
echo gettype($name);


//php.net

echo "<hr>";
echo "<hr>";
echo "<br/>";
define("ADDRESS", "10.10.56.32");
echo ADDRESS;
echo defined('ADDRESS');
echo "<hr>";
echo __FILE__;
echo "<hr>";
echo PHP_VERSION;


