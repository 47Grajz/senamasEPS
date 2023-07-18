<?php
namespace App\Controllers;

session_start();

class BaseController

{

    protected string $layout = "admin_layout";

    public function __construct()
    {
      if(isset($_SESSION['timeout'])){
        
        #se calcula el tiempo de vida de la sesion
        $time = time() - $_SESSION['timeout'];

        if ($time > (INACTIVE_TIME * 1000000)){
            session_destroy();
            header("location:/login/init");
        }else{
            $_SESSION['timeout'] = time();
        }
      }  
    }

    //Metodo para renderizar una vista con todos los datos
    protected function render($view, $data=[]):void
    {
        //extract($data); Otra forma para extraer variables del array
        foreach ($data as $key => $value) {
            //Extraer y crear variables de $data
            $$key = $value;
        }


        //include_once MAIN_APP_ROUTE."views/$view"."View.php";
        $content = MAIN_APP_ROUTE."views/$view"."View.php";
        $layout = MAIN_APP_ROUTE."views/layouts/{$this->layout}.php";

        include_once $layout;
    }

    protected function redirecTo($url)
    {
        header('location: '.$url);
        exit;
    }
    protected function formtCurrency($amount)
    {
        return '$'.number_format($amount, 2);
    }
}