<?php 

namespace Controllers;

use MVC\Router;

class EnfermedadController{

    public static function index(Router $router){

    $router -> render('enfermedad/index',[
        'titulo' => 'Enfermedades'
    ]);
    }
}