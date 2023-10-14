<?php

$obj = new stdClass();
$obj->name = 'Kaspar';
$obj->age = 30;
var_dump($obj);

function hello(){
    echo "hello world";
}

hello();
hello();
var_dump(hello());

function sum($a, $b){
    return $a+$b;
    echo 'akjsdasd';
}

$answer = sum(1,2);
var_dump($answer);
var_dump(sum(3,5));