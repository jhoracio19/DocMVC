<?php

namespace Controllers;

use MVC\Router;

class EsteticoController{

    public static function index(Router $router){

    $router -> render('esteticos/index',[
        'titulo' => 'Procedimientos Estéticos'
    ]);
    }
}