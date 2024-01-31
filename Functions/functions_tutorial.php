<?php

//  Function without parameter and without return statement 

function hello(){
    echo "Hello World!";
}

//  Function with parameter and without return statement 

function  add($a, $b){
    echo  "$a + $b = ". ($a+$b);
}

//  Function without parameter and with return statement 

function data(){
    return 5;
}

//  Function with parameter and with return statement 

function sum($a,$b){
    return $a+$b;
}

hello();

add(5,6);

$a=data();
echo "Value of a :- ".$a."\n";

$result=sum(5,6);
echo "Result :- ".$result;

?>