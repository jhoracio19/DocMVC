<?php

namespace Controllers;

use MVC\Router;

class HomeController{

    public static function index(Router $router){

    $router -> render('home/index',[

    ]);
    }

    public static function creditos(Router $router){

    $router -> render('home/creditos',[

    ]);
    }
}