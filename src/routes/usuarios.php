<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;
use Api\Modelos\Usuario;

/**
 * Funcion que permite consultar todos los clientes
 */

/**
* Funcion que permite con el metodo POST registrar datos en la BD
*/
$app->post('/usuarios', function(Request $request, Response $response,array $args){
    $data = $request->getParsedBody();
    $body = $response->getBody();

    //consultamos el usuario por medio de username 
    $row = Usuario::where('username','=',$data['username'])->first();

    //si la consulta anterior arroja un resultado
    //retornamos al cliente indicado que ya hay un registro del mismo username
    if(!is_null($row)){
        $body->write(json_encode(['message'=>'Ya existe un registro con el nombre de usuario ingresado']));
        return $response->withStatus(400);
    }

    //En caso de que siga el proceso, creamos un objeto de tipo usuario
    $usuario = new Usuario();

    $usuario->username= $data['username'];
    $usuario->password= password_hash($data['password'],PASSWORD_BCRYPT,['cost'=> 12]);
    $usuario->estado=1;
    $usuario->group_id=1;
    //se guarda el nuevo usuario
    $usuario->save();
    //retornamos la respuesta
    $body->write(json_encode($data));
    return $response->withStatus(200);


});
