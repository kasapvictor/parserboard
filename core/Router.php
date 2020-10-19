<?php

class Router
{
    protected $routes = [];

    public static function load($file)
    {
        $router = new Router;
        require $file;
        return $router;

    }

    public function define($routes)
    {
        $this->routes = $routes;
    }


    public function direct($uri)
    {
        if ( array_key_exists( $uri, $this->routes ) ) {
            return $this->routes[$uri];
        } else {
            return "views/404.view.php";
            //throw new Exception('no route uri');
        }
    }
}