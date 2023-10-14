<?php

class Box {
    public function __construct($width, $height){
        var_dump('construct', $width, $height);
    }
    public function __get($name){
        var_dump($name);
        return 'getvalue';
    }
    public function __set($name, $value){
        var_dump($name, $value);
    }
    public function __call($name, $args){
        var_dump($name, $args);
    }
    public static function __callStatic($name, $args){
        var_dump($name, $args);
    }

    public function __invoke($num){
        var_dump('as a function', $num);
    }
    public function __toString(){
        return 'cool box';
    }
    public function __destruct(){
      var_dump('destruct');  
    }
}
function makeBox(){
    $box = new Box(1,2);
    echo $box;
    $box(1);
    var_dump($box->color);
    $box->material = 'green';
    $box->volume(1,2,3);
    Box::stuff(3,4,5);
    var_dump('after $box');
}
var_dump('before func');
makeBox();
var_dump('after func');
