<?php


define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));

require_once (ROOT.DS.'lib'.DS.'init.php');

$uri = $_SERVER['REQUEST_URI'];
$router = new Router($uri);


echo "<pre>";
print_r('Route: '               . $router->getRoute() . PHP_EOL);
print_r('Language: '            . $router->getLanguage() . PHP_EOL);
print_r('Controller: '          . $router->getController() . PHP_EOL);
print_r('Action to be called: ' . $router->getMethodPrefix() . $router->getAction() . PHP_EOL);
echo "Params: ";
print_r($router->getParams());