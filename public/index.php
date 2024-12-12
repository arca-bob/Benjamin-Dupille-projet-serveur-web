<?php

require_once __DIR__ . '/../src/Database.php';
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/controllers/MainController.php';

$router = require_once __DIR__ . '/../src/router/routes.php';

// Débogage : voir les routes et la correspondance

$match = $router->match();

if ($match) {
    [$controller, $method] = explode('#', $match['target']);
    
    if (class_exists($controller) && method_exists($controller, $method)) {
        if (isset($match['params'])) {
            (new $controller())->$method(...array_values($match['params']));
        } else {
            (new $controller())->$method();
        }
    } else {
        (new MainController())->notFound();
    }
} else {
    (new MainController())->notFound();
}
