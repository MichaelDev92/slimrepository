<?php
use Slim\Http\Request;
use Slim\Http\Response;
use Api\Modelos\Usuario;

$app->post('/login', function(Request $request, Response $response, array $args){
    $data=$request->getParsedBody();
    $body=$response->getBody();

    //obtenemos la ip del usuario conectado
    //$ipClient = $request->getAttibute('ip_address');
    //consultamos al usuario
    $tmpUser=Usuario::where('username',$data['username'])->first();
    //variable para saber si tiene credenciales correctas
    $isCorrectData = true;

    //verificamos sino encontro algun usuario
    if(is_null($tmpUser)){
        $isCorrectData= false;
    }

    if($isCorrectData){
        //verificamos si la contraseña coincide con la de la base de datos
        if(!password_verify($data['password'],$tmpUser->password)){
            $isCorrectData=false;
        }
    }
    //si el usuario y el password son incorrectos
    if(!$isCorrectData){
        //se instancia un nuevo intento de inicio de sesion fallido
        $body->write(json_encode(array(
            'message'=>'Usuario o contraseña incorrecta',
            'code'=>400
        )));
        return $response->withStatus(400);
    }
    
    $body->write(json_encode(array(
        'user'=>$tmpUser,
        'message'=>'Ha iniciado sesión'
    )));

    return $response->withStatus(200);
});
