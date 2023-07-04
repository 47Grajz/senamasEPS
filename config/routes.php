<?php

$routes = [
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
  
    
    '/movies' => [
        'controller' => 'App\Controllers\PeliculasController',
        'action' => 'index'
    ],

    '/login/init' => [
        'controller' => 'App\Controllers\loginController',
        'action' => 'initLogin'
    ],

    '/login/logout' => [
        'controller' => 'App\Controllers\loginController',
        'action' => 'Logout'
    ],




    '/movies' => [
        'controller' => 'App\Controllers\PeliculasController',
        'action' => 'index'
    ],
    '/paciente/create' => [
        'controller' => 'App\Controllers\PacienteController',
        'action' => 'create'
    ],
    '/paciente/new' => [
        'controller' => 'App\Controllers\PacienteController',
        'action' => 'new'
    ],
    '/paciente/update' => [
        'controller' => 'App\Controllers\PacienteController',
        'action' => 'update'
    ],
    '/cita/create' => [
        'controller' => 'App\Controllers\citaController',
        'action' => 'create'
    ],
    '/cita/index' => [
        'controller' => 'App\Controllers\citaController',
        'action' => 'index'
    ],

    '/cita/eliminar/(\d+)' => [
        'controller' => 'App\Controllers\citaController',
        'action' => 'eliminar'
    ],

    '/paciente/show/(\d+)' => [
        'controller' => 'App\Controllers\PacienteController',
        'action' => 'getPaciente'
    ],
    '/paciente/edit/(\d+)' => [
        'controller' => 'App\Controllers\PacienteController',
        'action' => 'edit'
    ],
    '/paciente/eliminar/(\d+)' => [
        'controller' => 'App\Controllers\PacienteController',
        'action' => 'eliminar'
    ],
    '/paciente/details/(\d+)' => [
        'controller' => 'App\Controllers\PacienteController',
        'action' => 'details'
    ],
    '/medico/index' => [
        'controller' => 'App\Controllers\MedicoController',
        'action' => 'index'
    ],
    '/medico/create' => [
        'controller' => 'App\Controllers\MedicoController',
        'action' => 'create'
    ],
    '/medico/new' => [
        'controller' => 'App\Controllers\MedicoController',
        'action' => 'new'
    ],
    '/medico/edit/(\d+)' => [
        'controller' => 'App\Controllers\MedicoController',
        'action' => 'edit'
    ],
    '/medico/update' => [
        'controller' => 'App\Controllers\MedicoController',
        'action' => 'update'
    ],
    '/medico/eliminar/(\d+)' => [
        'controller' => 'App\Controllers\MedicoController',
        'action' => 'eliminar'
    ]
];
enviarRutas($routes);
function enviarRutas($routes){
    return $routes;
}
