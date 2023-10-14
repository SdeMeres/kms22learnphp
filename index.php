<?php
$num = 2;
if($num > 10){
    var_dump('suurem');
} else if($num === 10) {
    var_dump('võrdne');
} else {
    var_dump('väiksem');
}

if($num === 1){
    echo 'üks';
}
if($num === 2){
    echo 'kaks';
}
if($num === 3){
    echo 'kolm';
}
if($num === 4){
    echo 'neli';
}

switch($num){
    case 1:
        echo 'üks';
        break;
    case 6:
    case 5:
    case 2:
        echo 'kaks';
        break;
    
    case 3:
        echo 'kolm';
    case 4:
        echo 'neli';
        break;
    default:
        echo 'midagi muud';
}

for($i=0;$i<10;$i++){
    var_dump($i);
}

for($i=5;$i<10;$i++){
    var_dump($i);
}
for($i=10;$i<10;$i++){
    var_dump($i);
}

for($i=10;$i>0;$i--){
    var_dump($i);
}

for($i=1;$i<100;$i+=5){
    var_dump($i);
}
for($i=1;$i<1_000_000;$i*=2){
    var_dump($i);
}

// for($i=1;$i<10;$i--){
//     var_dump($i);
// }

// for(;;){
//     var_dump('hello');
// }

$date = time();
while(time() < $date+1){
    var_dump('hello');
}

$i = 0;
while($i>0){
    var_dump('while');
}

do {
    var_dump('do while');
} while($i>0);

$array = [1, 2, 3, 4];

for($i=0;$i<count($array);$i++){
    var_dump($array[$i]);
}

foreach($array as $value){
    var_dump($value);
}
foreach($array as $key=>$value){
    var_dump($key . ':' . $value);
}