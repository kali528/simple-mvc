<?php

class Request
{
    public static function get()
    {
        $params = $_GET; 
        preg_match_all('/\w+\/\d+/', $_SERVER['REQUEST_URI'], $matches);
        
        foreach (self::getParamsFromURIParams($matches[0]) as $key => $value) {
            $params[$key] = $value;
        }
        
        $params['method'] = $_SERVER['REQUEST_METHOD'];

        return $params;
    }

    public static function post()
    {
        $params['params'] = $_POST;
        $params['method'] = $_SERVER['REQUEST_METHOD'];
        return $params;
    }

    public static function put()
    {
        $params['params'] = $_PUT;
        $params['method'] = $_SERVER['REQUEST_METHOD'];
        return $params;
    }

    public static function delete()
    {
        $params['params'] = $_DELETE;
        $params['method'] = $_SERVER['REQUEST_METHOD'];
        return $params;
    }

    public static function getParamsFromURIParams($params)
    {
        for ($i=0; $i < count($params); $i++) 
        { 
            preg_match('/\w+/', $params[$i], $key);
            preg_match('/\d+/', $params[$i], $value);
            
            (yield $key[0] => $value[0]);
        }
    }
}
