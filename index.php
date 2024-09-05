<?php

class Box {
    public $height;
    public $width;
    public $length;

    public function volume(){
        return $this->height * $this->width * $this->length;
    } 
}

class MetalBox extends Box {
    public $weightPerUnit = 10;
    public function weight(){
        return $this->volume() * $this->weightPerUnit;
    }
}

$num1 = 1;
$num2 = $num1;
$num2 = 2;
var_dump($num1, $num2);



$metal1 = new MetalBox();
$metal1->height = 1;
$metal2 = clone $metal1;
$metal2->height = 2;
var_dump($metal1, $metal2);
