<?php

class Box {
    public $height;
    protected $width;
    private $length;

    public function volume(){
        return $this->height * $this->width * $this->length;
    } 
    public function getLength(){
        return $this->length;
    }
    public function setLength($length){
        if(is_numeric($length) && $length > 0){
            $this->length = $length;
        } else {
            $this->length = 0;
        }
    }
}

class MetalBox extends Box {
    public $weightPerUnit = 10;
    public function weight(){
        return $this->volume() * $this->weightPerUnit;
    }
    public function testProtected(){
        var_dump($this->width);
    }
}

$box = new MetalBox();
$box->setLength(121);
$box->testProtected();
var_dump($box);
