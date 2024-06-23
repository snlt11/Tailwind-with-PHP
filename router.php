<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    "/" => "controllers/index.php",
    "/about" => "controllers/about.php",
    "/contact" => "controllers/contact.php",
];

function routeToController($uri, $routes)
{
    if (array_key_exists($uri, $routes)) {
        require_once($routes[$uri]);
    } else {
        abort();
    }
}

function abort($code = 404)
{
    http_response_code($code);
    require_once("views/404.php");
    die();
}

routeToController($uri, $routes);
