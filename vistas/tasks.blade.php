<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tasks</title>
</head>
<body>

<hr>

<h1>Tasks</h1>
<p>Mis tareas pendientes son:</p>

<hr>
<!--ul>li*5 -->
<ul>
    <?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task -> completed == true): ?>
        <strike>
            <?php endif; ?>
            <?= $task -> name; ?>
            <?php if ($task -> completed == true): ?>
        </strike>
        <?php endif; ?>
    </li>
    <?php endforeach;?>
</ul>
</body>
</html>