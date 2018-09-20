<?php
/**
 * Created by PhpStorm.
 * User: mirokshi
 * Date: 18/09/18
 * Time: 20:41
 */

use PHPUnit\Framework\TestCase;

require '../models/Task.php';
class hello extends TestCase
{
    public function testTaskClass()
    {
        $task = new Task();

        $this->assertInstanceOf(Task::class,$task);

    }
    
    /**
     * @test
     */
    public function can_create_a_task_with_a_name()
    {
        $task = new  Task('Comprar pan'. false);

            //PROPIEDADES
        $this->assertEquals('Comprar pan', $task->name);
        $this->assertEquals(false,$task->completed);
            }

public function can_complete_a_task(){
        //Prepare
        $task = new Task('Comprar pan', false);

        //Ejecuta
        $task->completed;

        $this->assertEquals(true,$task);
}

    /**
     * @test
     */
    public function task()
    {

        //1) Preparacion
        //2) Ejecutar
        //3) Asertar
        require_once('../tasks.php');

    }
}