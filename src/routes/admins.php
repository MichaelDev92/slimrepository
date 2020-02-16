<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use Api\Modelos\Admin;

/**
 * Funcion que permite consultar todos los clientes
 */
$app->post('/admins', function(Request $request, Response $response, array $args) use($container){

    $container->get('logger')->info("Slim-Skeleton '/admins' route");
    $body = $response->getBody();
    //consultamos todos los usuarios
    $data = $request->getParsedBody();

    $admin = new Admin();
    $admin->tipodocumento= $data['tipodocumento'];
    $admin->documento= $data['documento'];
    $admin->nombres= $data['nombres'];
    $admin->apellidos= $data['apellidos'];
    $admin->genero= $data['genero'];
    $admin->celular= $data['celular'];
    $admin->telefonofijo= $data['telefonofijo'];
    $admin->codigopostal= $data['codigopostal'];
    $admin->fechanacimiento= $data['fechanacimiento'];
    $admin->edad= $data['edad'];
    $admin->pais= $data['pais'];
    $admin->departamento= $data['departamento'];
    $admin->ciudad= $data['ciudad'];
    $admin->fotoadmin= $data['fotoadmin'];
    $admin->fotoced1= $data['fotoced1'];
    $admin->fotoced2= $data['fotoced2'];
    $admin->direccion= $data['direccion'];
    $admin->correo= $data['correo'];
    $admin->jefeinmediato= $data['jefeinmediato'];

    $admin->save();

    $body->write(json_encode(['message'=>'registro exitoso']));

    return $response;
    
        

});