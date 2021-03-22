<?php
//use Phroute\Phroute\RouteCollector;
//use Phroute\Phroute\RouteCollector
$router = new Phroute\Phroute\RouteCollector();

$router->get('/', [\Application\Controllers\MainController::class, 'index']);
//$router->get('/pupils/create', \Application\Controllers\MainController::class, 'create');




$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());
$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));