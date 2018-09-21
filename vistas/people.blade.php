<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>People</title>
</head>
<body>
<hr>

<h1>People</h1>
<p>Lists People with work:</p>

<hr>
<!--ul>li*5 -->
<ul>
    <!-- PHP for que muestras las personas -->
    <?php foreach ($people as $person) : ?>
    <li>
        <!--  PHP if - si no tiene trabajo lo tacha   -->
        <?php if ($person -> work == true): ?>
        <strike>
            <?php endif; ?>
            <?= $person -> name; ?>
            <?php if ($person -> work == true): ?>
        </strike>
        <?php endif; ?>
    </li>
    <?php endforeach;?>
</ul>
</body>
</html>