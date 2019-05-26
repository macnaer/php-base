<?php

$a = 5;
$b = 10;

if ($a > $b) {
    echo "$a > $b";
} else if ($a < $b) {
    echo "$a < $b";
} else {
    echo "$a = $b";
}

echo "<br>";

echo $a < $b ? "True" : "False";
echo "<br>";
echo "<hr>";

$dayOfWeek = "Monday";

switch ($dayOfWeek) {
    case "Monday":
        echo "Monday";
        break;
    case "Satyrnday":
        echo "Satyrnday";
        break;
    default:
        echo "Wrong choise";

}