<?php

$array = [1,2,3,4];
array_push($array,5,6,7);
$array[] = 8;
$array[4] = 123123;
var_dump($array);