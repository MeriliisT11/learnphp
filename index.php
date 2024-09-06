<?php

class Box {
    public static $count = 0;
    public $id;
    public function __construct(){
        $this->id = self::$count++;
    }
    public static function setCount(){
        //var_dump($this->id);
        var_dump(self::$count);
    }
    public static function name(){
        var_dump(static::class);
    }
}
class MetalBox extends Box {
    
}
MetalBox::name();