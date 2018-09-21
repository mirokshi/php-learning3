<?php
class Connection {
    //Propiedades o metodos
    public function connect ()
    {
        try {
            return  new PDO('mysql:host=127.0.0.1;dbname=php_learning3', 'debian-sys-maint', 'ICRpaonaYA32Aexp');
        } catch (\PDOException $e) {
            die('Could not connect: ' . $e);
        }
    }
}