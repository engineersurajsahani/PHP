<?php

$n1=10;
$n2=20;

var_dump(($n1==100) &&  ($n2==200)); // false
var_dump(($n1==100) &&  ($n2==20)); // false
var_dump(($n1==10) &&  ($n2==20)); // true

var_dump(($n1==100) ||  ($n2==200)); // false
var_dump(($n1==100 ) ||  ($n2==20)); // true
var_dump(($n1==10) ||  ($n2==20)); // true

var_dump(!($n1==100)); // true
var_dump(!($n1==10)); // false

?>