<?php

$contacts=array(
    array(
        "name"=>"Suraj Sahani",
        "email"=>"surajsahani@gmail.com"
    ),
    array(
        "name"=>"Amit Sahani",
        "email"=>"amitsahani@gmail.com"
    ),
    array(
        "name"=>"Rakesh Sahani",
        "email"=>"rakeshsahani@gmail.com"
    ),
    array(
        "name"=>"Dinesh Sahani",
        "email"=>"dineshsahani@gmail.com"
    ),
    array(
        "name"=>"Ramesh Sahani",
        "email"=>"rameshsahani@gmail.com"
    ),
);

for($i=0;$i<count($contacts);$i++){
    echo "Name :- ".$contacts[$i]["name"]." and Email :- ".$contacts[$i]["email"]."\n";
}

?>