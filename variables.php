<?php

$a=20;
$c=15;

function myfunction(){
    $b=10;
    global $c;

    echo "value of 'a' inside function is : ".$a;
    echo "\nvalue of 'b' inside function is : ".$b;
    echo "\nvalue of 'c' inside function is : ".$c;
}

myfunction();
echo "\nvalue of 'a' inside function is : ".$a;
echo "\nvalue of 'c' inside function is : ".$c;
?>