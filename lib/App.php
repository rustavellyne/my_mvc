<?php
/**
 * Created by PhpStorm.
 * User: Sasha
 * Date: 1/23/2019
 * Time: 21:15
 */

class App
{
    protected static $router;

    /**
     * @return mixed
     */
    public static function getRouter(){
        return self::$router;
    }

    public static function run($uri) {
        self::$router = new Router($uri);
    }
}