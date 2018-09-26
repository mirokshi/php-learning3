<?php
/**
 * Created by PhpStorm.
 * User: mirokshi
 * Date: 18/09/18
 * Time: 20:41
 */

use PHPUnit\Framework\TestCase;


class RouterTest extends TestCase
{
    /**
     * @test
     */
    public function checks_returns_tasks_when_uri_is_null()
    {
        $path = Router::direct();
        $this-> assertEquals($path, 'app/controllers/tasks.php');
    }

    /**
     * @test
     */
    public function check_returns_tasks_when_uri_is_tasks()
    {
        Router::define(['/tasks' => 'controllers/tasks.php']);

        $path = Router::direct('/tasks');

        $this->assertEquals($path,'controllers/tasks.php');
    }

    /**
     *@test
     */
    public function check_returns_exeception_when_uri_is_wrong()
    {
        try{
            Router::direct('/tasks');
        }catch (Exception $e){
            $this->assertEquals("La pagina que pides no existe",$e ->getMessage());
        }
    }

    /**
     *@test
     */
    public function check_return_exeception_when_uri_not_exists()
    {
        try{
            Router::direct('/ddjdj');
        }catch (Exception $e){
            $this->assertTrue(true);
        }
    }


    /**
     * @test
     */
    public function can_define_routes()
    {
        //1 Prepare
        $routes = [
            '/' => 'controllers/tasks.php',
            '/tasks' => 'controllers/tasks.php',
            '/people' => 'controllers/people.php',
            '/lessons' => 'controllers/lessons.php',
            '/about' => 'controllers/about.php',
            '/contact' => 'controllers/contact.php'

        ];

        //2
        Router::define($routes);

        //3
        $this->assertEquals($routes,Router::routes());
    }
}