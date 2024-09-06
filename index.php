<?php

class Box {
    public $men = 'cool';
    public function __construct(){
        echo "Box was created\n";
    }

    public function __call($name, $args){
        var_dump($name, $args);
    } 
    public function __get($name){
        var_dump($name);
        return 'cool value';
    }
    public function __set($name, $value){
        var_dump($name, $value);
    }
    public function __destruct(){
        echo "Box was destoryed\n";
    }
    public function __toString(){
        return 'cool box';
    }
    public function __invoke(...$args){
        var_dump($args);
    }
}

$box = new Box();
$box->fname = 'kaspar';
$box->something(1,2,'asd');
$box->else('xxd', true, NULL);
var_dump($box->alahsdha);
var_dump($box);
echo $box;
$box(1,'asd', 'asda');