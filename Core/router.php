<?php

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require_once(base_path($routes[$uri]));
    } else {
        abort();
    }
}

$routes = require_once(base_path("routes.php"));

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

routeToController($uri, $routes);

function abort($code = 404)
{
    http_response_code($code);
    require_once(base_path("views/$code.php"));
    die();
}
