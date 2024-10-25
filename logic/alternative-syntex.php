<?php

$n = 12;

if ($n % 2 == 0) {
    echo "{$n} is even number";
} else {
    echo "{$n} is odd number";
}
echo PHP_EOL;

if ($n % 2 == 0):
    echo "Even Number";
    echo PHP_EOL; 
    echo "Some Text";
else :
    echo "Odd Number";
    echo PHP_EOL;
    echo "Some Text++";
endif;

echo PHP_EOL;

switch ($n % 2 == 0):
    case 0:
        echo "Even number";
        break;
    default:
        echo "Odd Number";
endswitch;
