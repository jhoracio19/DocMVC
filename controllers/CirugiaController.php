<?php

namespace Controllers;

use MVC\Router;

class CirugiaController{
    
    public static function index(Router $router){

    $router -> render('cirugias/index',[
        'titulo' => 'Cirugías'
    ]);
    }
}