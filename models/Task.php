<?php

class Task
{
    //PROPIEDADES
    public $name;
    public $completed;

    //CONSTRUCTOR
    /**
     * Task constructor.
     * @param $name
     */
    public function __construct($name, $completed)
    {
        $this->name = $name;
        $this->completed=$completed;
    }

    //ENCAPSULAR
public function complete(){
        $this->completed=true;
}

}