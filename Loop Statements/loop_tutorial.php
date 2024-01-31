<?php

echo "\n***** For Loop *****\n";

for($i=1;$i<11;$i++){
    echo "2 * ".$i." = ".(2*$i)."\n";
}

echo "\n***** While Loop *****\n";

$i=1;
while($i<11){
    echo "2 * ".$i." = ".(2*$i)."\n";
    $i++;
}

echo "\n***** Do While Loop *****\n";

$i=1;
do{
    echo "2 * ".$i." = ".(2*$i)."\n";
    $i++;
}while($i<11);

?>