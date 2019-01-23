<?php
/**
 * Created by PhpStorm.
 * User: Sasha
 * Date: 1/23/2019
 * Time: 14:22
 */

class Router
{
    protected $uri;

    protected $controller;

    protected $action;

    protected $params;

    /**
     * @return mixed
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    public function __construct()
    {

    }

}