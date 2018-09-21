<?php

class Person
{
    //PROPIEDADES
    public $name;
    public $surname;
    public $years;
    public $work;

    //CONSTRUCTOR
    /**
     * Task constructor.
     * @param $name
     */
    public function __construct($name = "", $surname = "", $years= "",$work=false)
    {
        $this->name = $name;
        $this->surname=$surname;
        $this->years=$years;
        $this->work=$work;
    }

    //ENCAPSULAR
    public function work(){
        $this->work=true;
    }

}