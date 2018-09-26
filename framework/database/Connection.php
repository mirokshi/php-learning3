<?php
class Connection {
    //Propiedades o metodos
    public static function connect ()
    {
        $database = config('database');
        var_dump($database);

        try {
            return  new PDO('mysql:host=127.0.0.1;dbname=php_learning3', 'debian-sys-maint', 'ICRpaonaYA32Aexp');
//            return  new PDO('mysql:host=127.0.0.1;dbname=php_learning3', 'debian-sys-maint', 'ICRpaonaYA32Aexp');
            //HACERLO
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}
