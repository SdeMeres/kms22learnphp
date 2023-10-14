<?php
    $name = 'Kaspar';
    $list = ['sai', 'leib', 'piim', 'viin'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello <?=$name?></h1>
    <ul>
        <?php foreach($list as $element): ?>
            <li><?=$element?></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>