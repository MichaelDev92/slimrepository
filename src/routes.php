<?php

use Slim\App;
use Slim\Http\Request;
use Slim\Http\Response;

return function (App $app) {
    $container = $app->getContainer();

    $app->get('/', function (Request $request, Response $response, array $args) use ($container) {
        // Sample log message
        $container->get('logger')->info("Slim-Skeleton '/' route");

        // Render index view
        //print_r($container->get('renderer')->render($response, 'index.phtml', $args));
        //exit();
        return $container->get('renderer')->render($response, 'index.phtml', $args);
    });

     // incluimos los archivos adicionales de los routes por entidad
     //require_once __DIR__."/routes/auth.php";
     //require_once __DIR__."/routes/usuarios.php";
     //require_once __DIR__."/routes/prestamos.php";
     require_once __DIR__."/routes/clientes.php";
     require_once __DIR__."/routes/usuarios.php";
     require_once __DIR__."/routes/auth.php";
     require_once __DIR__."/routes/paises.php";
     require_once __DIR__."/routes/admins.php";
};