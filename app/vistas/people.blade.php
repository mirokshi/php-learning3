<?php require 'partials/header.blade.php' ?>


<h1>People</h1>
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
            <?= $person -> surname; ?>
            <?= $person ->years; ?>

            <?php if ($person -> work == true): ?>
        </strike>
        <?php endif; ?>
    </li>
    <?php endforeach;?>
</ul>

<?php require 'partials/footer.blade.php' ?>
