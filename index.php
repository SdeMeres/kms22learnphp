<?php
$a=0;
$b=1;
$sum = 0;
while($b<4_000_000){
    $temp = $b;
    $b += $a;
    $a = $temp;
    if($b%2 === 0){
        $sum +=$b;
    }
}
var_dump($sum);