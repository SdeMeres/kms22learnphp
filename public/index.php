<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Router;
use App\Controllers\PublicController;
use App\Controllers\UserController;

session_start(['cookie_httponly' => true]);

unset($_SESSION['hasErrors']);

require_once __DIR__ . '/../helpers.php';
require_once __DIR__ . '/../routes.php';

$router = new Router($_SERVER['REQUEST_URI'], $_SERVER['REQUEST_METHOD']);
$match = $router->match();

if ($match) {
    $action = $match['action'];
    $params = $match['params'] ?? [];
    if (is_callable($action)) {
        call_user_func($action);
    } else if (is_array($action) && count($action) === 2) {
        [$controller, $method] = $action;
        if (class_exists($controller) && method_exists($controller, $method)) {
            call_user_func_array([new $controller, $method], $params);
        } else {
            http_response_code(404);
            include __DIR__ . '/../views/404.php';
        }
    }
} else {
    http_response_code(404);
    include __DIR__ . '/../views/404.php';
}

if (!isset($_SESSION['hasErrors'])) {
    unset($_SESSION['error']);
}