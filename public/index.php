<?php

require_once "../vendor/autoLoad.php";
require_once "../config/global.php";
require_once "../config/routes.php";

//echo "RUTA APP>" . MAIN_APP_ROUTE;

$url = $_SERVER['REQUEST_URI'];

/*$routes = [
    '/' => [
        'controller' => 'App\Controllers\HomeController',
        'action' => 'index'
    ],
    '/home' => [
        'controller' => 'App\Controllers\HomeController',
        'action' => 'index'
    ],
    '/hello' => [
        'controller' => 'App\Controllers\HomeController',
        'action' => 'greetings'
    ],
    '/paciente/index' => [
        'controller' => 'App\Controllers\PacienteController',
        'action' => 'index'
    ],
    '/paciente/test' => [
        'controller' => 'App\Controllers\PacienteController',
        'action' => 'test'
    ],
    '/movies' => [
        'controller' => 'App\Controllers\PeliculasController',
        'action' => 'index'
    ]
];*/

//Verificacion de las rutas validas

$matchedRoute = null;
foreach ($routes as $route => $routeConfig) {
    if(preg_match("#^$route$#", $url, $matches)){
        $matchedRoute = $routeConfig;
        break;
    }
}
if($matchedRoute){
    $controllerName = $matchedRoute['controller'];
    $action = $matchedRoute['action'];

    if(class_exists($controllerName) && method_exists($controllerName,$action)){
        $parameters = array_slice($matches,1);

        $controller = new $controllerName();
        $controller->$action(...$parameters);
        exit;
    }
}
//i llega a este punto quiere decir que la ruta no fue valida o el controlador y o accion son invalidas
http_response_code(404);
require_once MAIN_APP_ROUTE.'/views/404.php';
exit;