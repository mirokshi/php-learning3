<?php

class Router
{
    private static $routes = [];

    public static function routes ()
    {
        return self::$routes;
    }

    public static function define ($routes)
    {
        self::$routes= $routes;
    }

    public static function direct($uri = null)
    {
        if (!$uri) return 'app/controllers/tasks.php';

        // NO STATIC  $this->routes STATIC self::$routes

        if (array_key_exists($uri, self::$routes)) return self::$routes[$uri];
        throw new Exception('La pagina web que pides no existe');
    }

    public function execute($controller,$method)
    {
        $controller = new $controller();
        $controller-> $method();
    }
}