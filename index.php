<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}



$box = new Box();
$box->width = 10;
$box->height = 10;
$box->length = 10;
$volume = $box->volume();
var_dump($volume);
var_dump($box);
$box2 = new Box();
$box2->width = 20;
$box2->height = 20;
$box2->length = 20;
$volume2 = $box2->volume();
var_dump($volume2);
var_dump($box2);
var_dump($box);

$box3 = clone $box;
$box3->width = 3;
var_dump($box3);
var_dump($box);
$num = 1;
$num2 = &$num;
$num2 = 5;
var_dump($num);
var_dump($num2);