<?php
$year = 2016;
if ($year % 4 == 0 && $year % 100 == 0 && $year % 400 == 0) {
    echo "{$year} is a leap year";
} elseif ($year % 4 == 0 && $year % 100 == 0) {
    echo "{$year} is not a leap year";
} elseif ($year % 4 == 0) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}

echo "\n";


if ($year % 4 == 0 && ($year % 100 != 0 || $year % 400 == 0)) {
    echo "{$year} is a leap year";
} else {
    echo "{$year} is not a leap year";
}

echo "\n";
$condition1 = true;
$condition2 = true;
$condition3 = false;


if ($condition1) {
    if ($condition2) {
        if ($condition3) {
            echo "Hello";
        } else {
            echo "No 1";
        }
    } else {
        echo "No 2";
    }
} else {
    echo "No 3";
}
echo "\n";

if ($condition1 && $condition2 && $condition3) {
    echo "Hello";
} elseif ($condition1 && $condition2) {
    echo "NO 1";
} elseif ($condition1) {
    echo "No 2";
} else {
    echo "No 3";
}
echo "\n";

if (true && true) {
    echo "WOW 1";
}
echo "\n";
if (true || false) {
    echo "WOW 2";
}
echo "\n";
