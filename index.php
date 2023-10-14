<?php

$array = ['adf', 12, true, 5];
var_dump($array);
var_dump($array[0]);
$array[1] = 55;
var_dump($array);
$array[] = 'hello';
var_dump($array);
$array = [
    'name' => 'Kaspar',
    'age' => 30,
    5 => 1,
    2,
    3
];
var_dump($array);
$array = [
    [1,2,3],
    [4,5,6],
    [7,8,9]
];
var_dump($array);
var_dump($array[1][2]);
$array = [1, 2, 3];
$array2 = [4, 5, 6, 7];
$array3 = $array + $array2;
var_dump($array3);
