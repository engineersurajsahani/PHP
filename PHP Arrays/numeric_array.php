<?php

$colors=array("Red","Green","Blue");

// $colors[0]="Red";
// $colors[1]="Green";
// $colors[2]="Blue";

echo "The colors are: ";
for($i = 0; $i < count($colors); $i++) {
    echo $colors[$i] . ", ";
}
echo "\n";

var_dump($colors);

?>