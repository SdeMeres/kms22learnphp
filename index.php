<?php
$bool = true && true;
var_dump($bool);
$bool = true && false;
var_dump($bool);
$bool = false && false;
var_dump($bool);
$bool = false || true;
var_dump($bool);
$bool = !false;
var_dump($bool);
$bool = false || true && true || !false;
var_dump($bool);
$bool = true;