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

    public static function direct($uri, $requestType)
    {
       // if (!$uri) return 'app/controllers/PagesController@tasks';

        // NO STATIC  $this->routes STATIC self::$routes

        if (array_key_exists($uri, self::$routes[$requestType])) {
            explode('@', self::routes[$requestType][$uri]);
            return self::callAction();
        }

        throw new Exception('La pagina web que pides no existe');
    }

    public function execute($controller,$method)
    {
        $controller = new $controller();
        $controller-> $method();
    }

    protected function callAction($controller, $action)
    {
        if (!method_exists($controller,$action)){
            throw new Exception(
                "{$controller} dows not respond to the {$action} action "
            );
        }

        return ($controller)->$action();
    }
}