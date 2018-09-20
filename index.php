<?php


//var_dump($_GET);
//die();

// ->GET es un vector
//String -> $greeting='Hola';
//Boolean -> $x true/false;
//Enters -> $num = 15;

////Array/Vector
////
////$frutas  = array();
////$frutas = [];
//
//
//$platano = 'platano';
//$manzana = 'manzana';
//$naranja = 'naranja';
//$frutas = [$manzana , $platano ,$naranja];
//
//echo  $frutas[0];
//die();


////Array asociativo

//$persona = 'Mirokshi';

//$persona = [
//    'name' => 'Mirokshi Rojas Diaz',
//    'dni' => 'Y4786533'
//    'mobile' => '616531219'
//]
require 'functions.php';

$greeting= hello($_GET['greeting']);

require 'vistas/index.blade.php';


