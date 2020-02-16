<?php

/**
 * Define la ruta a la raiz del proyecto 
 */
define("ROOT_PROJECT", dirname(__DIR__) . DS);

/**
 * Define la ruta para la carpeta publica
 */
define("WWW_ROOT", ROOT_PROJECT . 'public' . DS);

/**
 * Define la ruta para la carpeta de archivos de migracion
 */
define("DIR_DB_FILES", ROOT_PROJECT . 'bd' . DS);

/**
 * Define la carpeta publica que contiene los archivos que suben los clientes 
 * o los que genera el sistema para el mismo cliente (S3 - archivos planos)
 */
define("PATH_WWW_FILES", WWW_ROOT . 'files' . DS);

/**
 * Define la ruta para la carpeta temporal publica
 */
define("PATH_WWW_TMP_FILES", WWW_ROOT . 'tmp' . DS);

/**
 * Define la ruta para la carpeta tmeporal de archivos
 */
define("PATH_TMP", ROOT_PROJECT . 'tmp' . DS);

