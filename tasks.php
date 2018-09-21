<?php
require 'framework/bootstrap.php';
require 'models/Task.php';

//Statiques
//$pdo = Connection::connect();
//$tasks =QueryBuilder::fetchAll($pdo,'tasks');

//$tasks = new Task();
//$tasks = $tasks->all();
$tasks = Task::all();

require 'vistas/tasks.blade.php';
