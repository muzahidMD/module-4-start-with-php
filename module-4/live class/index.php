<?php
$item = "Notebook";
$price = 100.5;
$quantity = 5;
$totalPrice = $price * $quantity;

// echo "The price of a $item is $price. \n";
// echo "The total price of $quantity {$item}s is $totalPrice. \n";
// print ("The total price of $quantity {$item}s is $totalPrice. \n");

printf('The total price of %d %s is %.2f', $quantity, $item, $totalPrice);

