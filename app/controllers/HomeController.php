<?php
    namespace App\Controllers;

    class HomeController{
        public function index(){
            echo "<br> CONTROLLER: HomeController";
            echo "<br> ACCION: Index";
        }
        public function greetings(){
            echo "<hr> <br>Hello Body";
            echo "<br> CONTROLLER: HomeController";
            echo "<br> ACCION: Index";
        }      
    }