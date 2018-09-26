<?php

class Lesson
{
    //PROPIEDADES
    public $name;
    public $duration;
    public $teacher;
    public $approved;

    //CONSTRUCTOR
    /**
     * Task constructor.
     * @param $name
     */
    public function __construct($name = "", $duration = "", $teacher = "", $approved=false)
    {
        $this->name = $name;
        $this->duration = $duration;
        $this->teacher = $teacher;
        $this->approved=$approved;
    }

    //ENCAPSULAR
    public function approved(){
        $this->approved=true;
    }

    public static function all()
    {
        $pdo = Connection::connect();
        return QueryBuilder::fetchAll($pdo,'lessons');
    }
}