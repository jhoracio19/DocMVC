<?php

function debuguear($variable) : string {
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit;
}

// Escapa / Sanitizar el HTML
function s($html) : string {
    $s = htmlspecialchars($html);
    return $s;
}

// Función que revisa que el usuario este autenticado
function isAuth() : void {
    if(!isset($_SESSION['login'])) {
        header('Location: /');
    }
}

// Función para hacer dinámica la parte de los anios de experiencia del doctor
function obtenerAniosExperiencia($anio_inicio = 2008) {
    $anio_actual = date('Y');
    return $anio_actual - $anio_inicio;
}