<?php
require 'vendor/autoload.php';

require 'framework/bootstrap.php';

//Router::direct($_SERVER['REQUEST_URI']);
require Router::direct($_SERVER['REQUEST_URI']);

//MVC: Model Vista Controlador
