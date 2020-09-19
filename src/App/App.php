<?php

/* use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request; */
use Slim\Factory\AppFactory;

require __DIR__ . '/../../vendor/autoload.php';


$aux = new DI\Container();
AppFactory::setContainer($aux);
$app = AppFactory::create();
$container = $app->getContainer();



/* $app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
}); */

require __DIR__ .'/Routes.php';
require __DIR__ .'/Configs.php';
require __DIR__ .'/Dependences.php'; 
/* $app->run(); */


$app->run();