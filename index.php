<?php

    use Core\Router;

    const BASE_PATH = __DIR__;

    require BASE_PATH . '/Core/functions.php';

    spl_autoload_register(function ($class) {
        $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);

        require base_path("{$class}.php");
    });

    require base_path('bootstrap.php');

    $router = new Router();
    $routes = require base_path('routes.php');

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];
	// Validate the HTTP method
	$valid_methods = ['GET', 'POST', 'PUT', 'PATCH', 'DELETE'];

	if (!in_array($method, $valid_methods)) {
		header('HTTP/1.1 405 Method Not Allowed');
		exit;
	}

    $router->route($uri, $method);
