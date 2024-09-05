<?php

class Box {
    public $height;
    public $width;
    public $length;

    public function volume(){
        return $this->height * $this->width * $this->length;
    } 
}

$box1 = new Box();
$box1->height = 1;
$box1->width = 2;
$box1->length = 3;
var_dump($box1);
$box2 = new Box();
$box2->height = 4;
$box2->width = 5;
$box2->length = 6;
var_dump($box1);
var_dump($box2);

var_dump($box1->volume());
var_dump($box2->volume());