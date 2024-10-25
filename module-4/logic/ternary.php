<?php
// ternary operator

$n =    10;

if (12 == $n) {
    echo "Twelve";
} elseif (10 == $n) {
    echo "Ten";
} else {
    echo "A number";
}
echo "\n";

// $numberInWorld  = 12 == $n ? "Twelve" : "A Number";
$numberInWorld  = (12 == $n) ? "Twelve" : ((10 == $n)  ? "Ten" : "A Number");
echo $numberInWorld;

echo "\n";

if ($n % 2 == 0) {
    echo "Even Number";
} else {
    echo "Odd number";
}
echo "\n";
$result = ($n % 2 == 0) ? "Even Number" : "Odd Number";
echo $result;

echo "\n";
