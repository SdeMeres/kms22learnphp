<?php

class Box {
    public $width;
    public $height;
    public $length;

    public function volume(){
        return $this->width * $this->height * $this->length;
    }
}

class MetalBox extends Box {
    public $material = 'metal';
}

class IronBox extends MetalBox {
    use MakesSound;
    public $material = 'iron';
}

class WoodBox extends Box {
    use MakesSound;
    public $material = 'wood';
}

trait MakesSound {
    public $sound;

    public function makeSound(){
        echo $this->sound;
    }
}

$woodBox = new WoodBox();
$woodBox->sound = 'kolksti';
$woodBox->makeSound();

$box = new Box();
$box->width = 10;
$box->height = 10;
$box->length = 10;
var_dump($box);
$metalBox = new MetalBox();
$metalBox->width = 10;
$metalBox->height = 10;
$metalBox->length = 10;
var_dump($metalBox);
var_dump($metalBox->volume());