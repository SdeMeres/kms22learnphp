<?php

class Box {
    public $width;
    public static $count = 0;

    public static function getCount() {
        var_dump(static::$count);
        
    }
    public function getWidth(){
        var_dump(static::$count);
        self::getCount();
        var_dump($this->width);
    }
}

class MetalBox extends Box {
    public static $count = 5;
}

MetalBox::getCount();
Box::getCount();
Box::$count = 1;
Box::$count = 2;
var_dump(Box::$count);
var_dump(Box::$count);
$box = new Box();
$box->getWidth();