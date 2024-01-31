<?php

class Car{
    
    function Car(){
        $this->model="BMW";
    }
}

$mycar=new Car();
echo "The car's model is: ".$mycar->model;

?>