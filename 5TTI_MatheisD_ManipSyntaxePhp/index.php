<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h4>Ex 1</h4>   

    <?php for ($i = 1; $i <= 10; $i++) : ?>
        <p>Le nombre est: <?= $i ?> </p>
    <?php endfor ?>

    <h4>Ex 2</h4>

    <?php for ($j= 1; $j<= 10; $j++) : ?>
        <?php if ($j != 3) : ?>
        <p>Le nombre est : <?= $j ?> </p>
        <?php endif ?>
    <?php endfor ?>

    <h4>Ex 3</h4>

    <?php for ($k = 1; $k <= 10; $k++) : ?>
        <?php if($k < 4 || $k > 7) : ?>
            <p>Le nombre vaut : <?= $k ?></p>
        <?php endif ?>
    <?php endfor ?>

    <h4>Ex 4</h4>

    <?php 
        $nbr1 = -5;
        $nbr2 = -10;
    ?>

    <p>La valeur absolue de <?= $nbr1 ?> vaut : <?= abs($nbr1) ?></p>
    <p>La valeur absolue de <?= $nbr2 ?> vaut : <?= abs($nbr2) ?></p>

</body>
</html>