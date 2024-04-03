<?php
namespace App\Route;

class Route {
    private static $routes = [];

    public static function showroutes(){
        return self::$routes;
    }
    public static function add($uri, $controller) {
        $uri="#^".$uri."$#";
        self::$routes[] = ['uri' => $uri, 'controller' => $controller];
    }

    public static function dispatch($uri) {
        foreach (self::$routes as $route) {
              
            if (preg_match($route['uri'], $uri,$matches)) {
                if(count($matches)>0){
                    list($controller, $method) = explode('@', $route['controller']);
                    $controllerClass = 'App\Controllers\\' . $controller;
                    $controllerInstance = new $controllerClass();
                    $controllerInstance->$method();
                    return;
                }
            }
        }
        // echo '404 Not Found';
    }
}
