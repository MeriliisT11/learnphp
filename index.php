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
    use HasMaterial;
    public $weightPerUnit = 10;
    public function weight(){
        return $this->volume() * $this->weightPerUnit;
    }
}

trait HasMaterial {
    public $material;
    public function getMaterial() {
        return $this->material;
    }
}

