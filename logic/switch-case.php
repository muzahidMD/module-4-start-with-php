<?php
$n = 12;
$r = $n % 2;

switch ($r) {
    case 0;
        echo "{$n} is an even number \n";
        break;
    default:
        echo "{$n} is an odd number \n";
}

$color = 'blue';
switch ($color) {
    /*case 'red':
    echo "{$color} is our favorite color";
    break;
case 'green':
    echo "{$color} is our favorite color";
    break;*/
    case 'red':
    case 'green':
        echo ucwords($color), " is our favorite color";
        break;
    case 'blue':
        echo ucwords($color) . " is not our favorite color";
        break;
    default:
        echo "This color is ok";
}
echo "\n";
