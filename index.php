<?php
declare(strict_types=1);

// Front controller Leabyva Digital Works (MVC light)

$root = __DIR__;

// Autoload + helpers
require $root . '/app/bootstrap.php';

use App\Controllers\HomeController;
use App\Controllers\ServicesController;
use App\Controllers\AboutController;
use App\Controllers\PortfolioController;
use App\Controllers\ContactController;

$page = $_GET['page'] ?? 'home';

$routes = [
    'home'      => HomeController::class,
    'services'  => ServicesController::class,
    'about'     => AboutController::class,
    'portfolio' => PortfolioController::class,
    'contact'   => ContactController::class,
];

if (!isset($routes[$page])) {
    http_response_code(404);
    $page = 'home';
}

$controllerClass = $routes[$page];

/** @var \App\Controllers\BaseController $controller */
$controller = new $controllerClass();
$controller->index();

