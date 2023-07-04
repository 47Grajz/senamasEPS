<?php
spl_autoload_register(function ($className) {
    $prefix = 'App\\';

    //Remover el prefijo de namesapace
    $className = str_replace($prefix, '/', $className);
    //Reeemplazar barras invertidas por barras diagonales
    $className = str_replace('\\','/', $className);
    $file = MAIN_APP_ROUTE. $className . '.php';
    if(is_file($file)){ //Si el archivo existe se incluye
        require_once $file;
    }
});
?>