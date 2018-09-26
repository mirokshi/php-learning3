<?php
use PHPUnit\Framework\TestCase;
class AppTest extends TestCase{
    /**
     * @test
     */
    public function check_container_can_bind_and_resolv()
    {
        //1PREPARE

        //2EXECUTE

        //IOC -> Inversion of Control Container
//        App::bind() //set
            //App::resolve() -> get
        $config = [
            'database' =>[
                'type' => 'mysql',
                'host' => '127.0.0.1',
                'name' => 'php_learnig3',
                'user' => 'debian',
                'password' => 'ICRpaonaYA32Aexp',
                'options' => [
                    'PDO::AFTER_ERRMODE => PDO::ERRMODE_EXCEPTION'
                ],
            ]
        ];
        App::bind('config',$config);
        //Representará (el estado) mi aplicación

        //Database
        //Config
        //Cache
        //Routes


        //3ASSERT

//        $this->assertTrue($config=== App::resolve('config'));
        $this->assertEquals($config,App::resolve('config'));
    }

    /**
     * @test
     */
    public function throw_an_error_when_trying_to_acces_an_unexisting_value()
    {
        try{
            App::resolve('congig');
        }catch (Exception $e) {
            $this->assertEquals($e->getMessage(), 'No config found in registry');
        }
    }


}