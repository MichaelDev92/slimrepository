<?php

use Slim\App;
use RKA\Middleware\IpAddress;
use Api\Middlewares\AccessToken;

return function (App $app) {
    
    /**
    * Agregamos middleware para revisar las credenciales de acceso al sistema
    */
    //$app->add(new AccessToken($app->getContainer()));


    $checkProxyHeaders = true;
    $trustedProxies = ['10.0.0.1', '10.0.0.2'];
    //$app->add(new IpAddress($checkProxyHeaders, $trustedProxies));
    /**
     * mostramos las preferencias de cabeceras (headers)
     */
    $app->add(function ($request, $response, $next) {
        if ($request->getUri()->getPath() !== '/') {
            $response = $response
                    ->withHeader("content-type", "application/json; charset=utf-8")
                    ->withHeader("Access-Control-Allow-Origin", "*")
                    ->withHeader("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE, OPTIONS, PATCH")
                    ->withHeader("Access-Control-Allow-Headers", "Origin, X-Requested-With, Content-Range, Content-Match, Content-Type")
                    ->withHeader("Access-Control-Allow-Credentials", true);
        }
        return $next($request, $response);
    });
};
