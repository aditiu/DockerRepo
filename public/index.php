<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require '../vendor/autoload.php';

$app = new \Slim\App;
$app->get('/', function (Request $request, Response $response) {
    $response->getBody()->write("Hello world for testing and updated from local windows host and tested through jenkin build on docker environment");

    return $response;
});
$app->get('/hello/{name}', function (Request $request, Response $response, array $args) {
   $name = $args['name'];
    $response->getBody()->write("Hello, $name");

   return $response;
});
$app->run();
