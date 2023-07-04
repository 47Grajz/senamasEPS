<?php 
namespace App\Controllers;
class PeliculasController{
    public function index(){
        $movies = ['Rapido y Furioso','Avatar', 'La ultima patada del mocho', 'Mario y los bros', 'La siregrita'];
        $data = [
            'movies' => $movies,
            'Cantmovies' => count($movies)
        ];
        require_once MAIN_APP_ROUTE . "/views/movies/index.php";
    }
}