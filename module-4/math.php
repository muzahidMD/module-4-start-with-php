<?php
// Addition
$number = 12;
// $number = $num1 + 13;
// $number += 13; 
$number2 = $number + 20;

// $number = (24-4) / (7-2);
// $number = 20 % 3;
$number++;

// echo  $number, "\n";

// + - * / %  = Arithmetic operator
// +=, -=, *=, /= Assignment operator 
// ++, -- = 

// $n= 7;
// $m = $n++; 

$n = 7;
$m = ++$n;
echo $m, "\n", $n;

/* 
// $m = $++;
$m = $n;
$n = $n + 1;

$m = ++$n;
$n = $n +1;
$m = $n;
*/
// modulus %
echo PHP_EOL;
$number = 19;
$divisor = 4;
$remainder = $number % $divisor;
echo "$remainder \n";
echo "The remainder of $number divided by $divisor is $remainder \n";
echo "The remainder of {$number} divided by {$divisor} is {$remainder} \n";