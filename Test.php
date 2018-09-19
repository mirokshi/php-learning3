<?php
/**
 * Created by PhpStorm.
 * User: mirokshi
 * Date: 18/09/18
 * Time: 20:41
 */

use PHPUnit\Framework\TestCase;

class hello extends TestCase
{
    public function testHelloWorld()
    {
        require('hello.php');
        $this->expectOutputString('Hola mundo');
    }

}