<?php

$n =9;
/*
if ($n % 2 == 0){
    echo "$n is an even number";
}else{
    echo "$n is an odd number";
}
echo "\n";

if ($n > 10 ){
    echo("$n is grater then 10"); 
}else{
    echo("$n is less then 10");
}
    */

$food = "mango";

if("tuna" == $food || "salmon" == $food ){
    echo "It has vitamin D";
}elseif( $food == "apple"){
    echo "Is has no vitamin D";
}else{
    echo "We are not certain about it";
}

echo "\n";