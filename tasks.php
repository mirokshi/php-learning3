<?php
require 'framework/bootstrap.php';
require 'models/Task.php';


$tasks = Task::all();

require 'vistas/tasks.blade.php';
