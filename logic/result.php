<?php
// Calculating grade with if-else

$marks = 60;

if ($marks <= 100 && $marks >= 80) {
    echo "A+";
} elseif ($marks <= 80 && $marks >= 70) {
    echo "A";
} elseif ($marks <= 70 && $marks >= 60) {
    echo "A-";
} elseif ($marks <= 60 && $marks >= 50) {
    echo "B";
} elseif ($marks <= 50 && $marks >= 40) {
    echo "C";
} elseif ($marks <= 40 && $marks >= 33) {
    echo "D";
} else {
    echo "F";
}
echo "\n";


// Calculating grade with switch-case
switch (true) {
    case ($marks <= 100 && $marks >= 80):
        echo "A+";
        break;
    case ($marks <= 80 && $marks >= 70):
        echo "A";
        break;
    case ($marks <= 70 && $marks >= 60):
        echo "A-";
        break;
    case ($marks <= 60 && $marks >= 50):
        echo "B";
        break;
    case ($marks <= 50 && $marks >= 40):
        echo "C";
        break;
    case ($marks <= 40 && $marks >= 33):
        echo "D";
        break;
    default:
        echo "F";
}

echo "\n";

