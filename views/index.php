<?php include 'partials/header.php' ?>

    <h1>Hello <?=$name?></h1>
    <ul>
        <?php foreach($list as $element): ?>
            <li><?=$element?></li>
        <?php endforeach; ?>
    </ul>
<?php include 'partials/footer.php' ?>