<?php

//require 'models/Task.php';
//new Task('Tu mama es hombre', false);

//new PDO

//..
//$tasks1= [ 'name' => 'Comprar pan', 'completed' => false];
//$tasks2= [ 'name' => 'Comprar leche', 'completed' => false];
//$tasks3= [ 'name' => 'Estudiar PHP', 'completed' => true];

$tasks = [[
    'name' => 'comprar pan',
    'completed' => false
],
 [
    'name' => 'Estudiar PHP',
    'completed' => true
],
[
    'name' => 'comprar leche',
    'completed' => true
]];
require 'vistas/tasks.blade.php';
