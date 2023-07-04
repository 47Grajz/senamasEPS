<?php
namespace App\Controllers;

session_start();

class BaseController


{


    public function __construct()
    {
        if(isset($_SESSION['time_out'])){
            //SE CALCULA EL TIEMPO DE VIDA DE LA SESION
            $sesionTime = time() - $_SESSION['time_out'];
            if($sesionTime > (INACTIVE_TIME * 60)){
                session_destroy();
                header("Location:/login/init");
            }else{
                $_SESSION['time_out'] = time();
            }
        }
    }



    protected string $layout = "admin_layout";
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