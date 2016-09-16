<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;
use \Sillevl\FakeTemperature;

require './vendor/autoload.php';

$app = new \Slim\App();

$app->get('/api/temperature/fake', function (Request $request, Response $response) {
    $temperature = FakeTemperature::getTemperature();
    $response->getBody()->write("$temperature");

    return $response;
});
$app->run();
