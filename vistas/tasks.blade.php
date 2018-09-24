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
<!-- NO HTML5 -->
<!-- SEMANTICA-->
<!-- DRY -->
<nav>
    <li><a href="/tasks.php">Tasques</a></li>
    <li><a href="/people.php">Personas</a></li>
    <li><a href="/lessons.php">LLiçons</a></li>
    <li><a href="/lessons.php">Contacte</a></li>
    <li><a href="/lessons.php">Sobre nosaltres</a></li>

</nav>

<hr>
<h1>Tasks</h1>
<p>Mis tareas pendientes son:</p>
<hr>

<ul>
    <!-- PHP for que muestras las tareas -->
    <?php foreach ($tasks as $task) : ?>
    <li>
        <!--  PHP if - si la tarea está completa lo tacha   -->
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