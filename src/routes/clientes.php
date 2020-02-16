<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use Api\Modelos\Cliente;

/**
 * Funcion que permite consultar todos los clientes
 */
$app->get('/clientes', function(Request $request, Response $response, array $args) use($container){

    $body = $response->getBody();
    //consultamos todos los usuarios
    $row = Cliente::all();
    $body->write(json_encode($row));
    return $response->withStatus(200);

});

$app->get('/clientes/{id}', function(Request $request, Response $response, array $args) use($container){

	$body = $response->getBody();
	$row = Cliente::where('id', '=', $args['id'])->latest()->get();
	$body->write(json_encode($row));
    return $response->withStatus(200);
});
