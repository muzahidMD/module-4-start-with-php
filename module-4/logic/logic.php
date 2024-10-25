<?php
// logical operator 
/*
== = equal 
!= = not equal
> = greater then
< = less then
>= = greater then equal
>= = less then equal
&& = and
|| = or
*/

$n = 13;
if ($n % 2 == 0) {
    echo "$n is an even number \n";
} else {
    echo "$n is an odd number \n";
}

echo "\n";
$p = 12;
$q = 13;
if ($p == $q) {
    echo "P is equal to Q";
} elseif ($p != $q) {
    echo "P is not equal to Q";
}

echo "\n";

$age = 20;

if ($age >= 13 && $age <= 19) {
    echo "This person is a teenager";
} else {
    echo "This person is not a teenager";
}
echo "\n";

$food = "salmon";

if ("tuna" == $food || "salmon" == $food) {
    echo "{$food} has vitamin D";
} elseif ("apple" == $food) {
    echo "Apple doesn't contain vitamin D";
} else {
    echo "We don't know if {$food} contain vitamin D";
}

echo "\n";
