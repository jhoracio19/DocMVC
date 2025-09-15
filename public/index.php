<?php 

require_once __DIR__ . '/../includes/app.php';
use MVC\Router;

use Controllers\AdminController;
use Controllers\CirugiaController;
use Controllers\EnfermedadController;
use Controllers\EsteticoController;
use Controllers\HomeController;
use Controllers\LoginController;

$router = new Router();

// Home
$router -> get('/', [HomeController::class, 'index']);
$router -> get('/reviews', [HomeController::class, 'reviews']);
$router -> get('/creditos', [HomeController::class, 'creditos']);


// Enfermedad
$router -> get('/enfermedades', [EnfermedadController::class, 'index']);
$router -> post('/enfermedades/crear', [EnfermedadController::class, 'crear']);
$router -> get('/enfermedades/crear', [EnfermedadController::class, 'crear']);
$router -> post('/enfermedades/actualizar', [EnfermedadController::class, 'actualizar']);
$router -> get('/enfermedades/actualizar', [EnfermedadController::class, 'actualizar']);
$router -> post('/enfermedades/eliminar', [EnfermedadController::class, 'eliminar']);

// Cirugias
$router -> get('/cirugias', [CirugiaController::class, 'index']);
$router -> post('/cirugias/crear', [CirugiaController::class, 'crear']);
$router -> get('/cirugias/crear', [CirugiaController::class, 'crear']);
$router -> post('/cirugias/actualizar', [CirugiaController::class, 'actualizar']);
$router -> get('/cirugias/actualizar', [CirugiaController::class, 'actualizar']);
$router -> post('/cirugias/eliminar', [CirugiaController::class, 'eliminar']);


// Estetico
$router -> get('/esteticos', [EsteticoController::class, 'index']);
$router -> post('/esteticos/crear', [EsteticoController::class, 'crear']);
$router -> get('/esteticos/crear', [EsteticoController::class, 'crear']);
$router -> post('/esteticos/actualizar', [EsteticoController::class, 'actualizar']);
$router -> get('/esteticos/actualizar', [EsteticoController::class, 'actualizar']);
$router -> post('/esteticos/eliminar', [EsteticoController::class, 'eliminar']);

// Inicia Sesión
$router -> get('/login', [LoginController::class, 'login']);
$router -> post('/login', [LoginController::class, 'login']);
$router -> post('/logout', [LoginController::class, 'logout']);

// Crear Cuenta
$router -> get('/crear-cuenta', [LoginController::class, 'crear']);
$router -> post('/crear-cuenta', [LoginController::class, 'crear']);

// Confirmar cuenta
$router -> get('/confirmar-cuenta', [LoginController::class, 'confirmar']);
$router -> get('/mensaje', [LoginController::class, 'mensaje']);

// Área privada
$router -> get('/admin', [AdminController::class, 'index']);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();