<?php

require 'models/Person.php';



try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=lists_people','debian-sys-maint','ICRpaonaYA32Aexp');
}catch (\PDOException $e){
    die('Could not connect: '. $e);
}

//CONSULTA SQL -> STATEMENT SQL
$statement = $pdo->prepare('SELECT * FROM people;');
$statement->execute();
$people = $statement -> fetchAll(PDO::FETCH_CLASS);


require 'vistas/people.blade.php';