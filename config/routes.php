<?php

$routes = [


// ----------------Rutas Iniciales -------------------

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

  
    // ----------------Login -------------------

    '/login/init' => [
        'controller' => 'App\Controllers\loginController',
        'action' => 'initLogin'
    ],

    '/login/logout' => [
        'controller' => 'App\Controllers\loginController',
        'action' => 'Logout'
    ],

    '/login/register' => [
        'controller' => 'App\Controllers\loginController',
        'action' => 'register'
    ],


    // ----------------Rutas Usuario -------------------

    '/usuario/index' => [
        'controller' => 'App\Controllers\userController',
        'action' => 'index'
    ],

    '/usuario/create' => [
        'controller' => 'App\Controllers\userController',
        'action' => 'create'
    ],

    '/usuario/new' => [
        'controller' => 'App\Controllers\userController',
        'action' => 'new'
    ],

 

    '/usuario/eliminar/(\d+)' => [
        'controller' => 'App\Controllers\userController',
        'action' => 'eliminar'
    ],


    // ----------------Rutas Paciente -------------------
   
    '/paciente/index' => [
        'controller' => 'App\Controllers\PacienteController',
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
    '/paciente/update/(\d+)' => [
        'controller' => 'App\Controllers\PacienteController',
        'action' => 'update'
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


    // ----------------Rutas Citas -------------------

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

        // ----------------Rutas Especialidades -------------------

        '/especialidad/index' => [
            'controller' => 'App\Controllers\EspecialidadController',
            'action' => 'index'
        ],

        
        '/especialidad/create' => [
            'controller' => 'App\Controllers\EspecialidadController',
            'action' => 'create'
        ],

          
        '/especialidad/new' => [
            'controller' => 'App\Controllers\EspecialidadController',
            'action' => 'new'
        ],

        
    '/especialidad/eliminar/(\d+)' => [
        'controller' => 'App\Controllers\EspecialidadController',
        'action' => 'eliminar'
    ],

          
    '/especialidad/edit/(\d+)' => [
        'controller' => 'App\Controllers\EspecialidadController',
        'action' => 'edit'
    ],

              
    '/especialidad/update/(\d+)' => [
        'controller' => 'App\Controllers\EspecialidadController',
        'action' => 'update'
    ],




    
    // ----------------Rutas Medico -------------------


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
    '/medico/update/(\d+)' => [
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
