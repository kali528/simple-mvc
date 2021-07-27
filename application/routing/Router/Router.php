<?php
require_once '../application/http/Request.php';

class Router
{
    public static $routes = [];

    public static function route( $uri, $method, $routes_file )
    {
        require_once '../application/routing/'.$routes_file.'.php';
    
        $request = Request::{$method}();
        self::directTo( $uri, $request, self::$routes );
    }

    public static function directTo( $uri, $request )
    {   
        $uri_params_a    = explode('/', substr($uri, 1));

        $controller_name = ucfirst(mb_strtolower($uri_params_a[0], 'UTF-8')).'Controller';
        $controller_path = '../application/controllers/'.$controller_name.'.php';
        
        if( file_exists($controller_path) )
        {
            require_once $controller_path;
            
            $uri_patern = preg_replace('/\b\?.+/', '', $uri);
            $uri_patern = preg_replace('/\b\d+/', '{id}', $uri_patern);
            
            if(isset(self::$routes[$request['method']][$uri_patern]))
            {
                $action     = substr(self::$routes[$request['method']][$uri_patern], strlen("{$uri_params_a[0]}.")); 
                $controller = new $controller_name;
                $controller->$action( $request );
            }
        }

        return null;
    }

    public static function get($route, $method)
    {
        self::$routes['GET'][$route] = $method;
    }

    public static function post($route, $method)
    {
        self::$routes['POST'][$route] = $method;
    }

    public static function put($route, $method)
    {
        self::$routes['PUT'][$route] = $method;
    }

    public static function delete($route, $method)
    {
        self::$routes['DELETE'][$route] = $method;
    }



}
