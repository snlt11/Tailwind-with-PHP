<?php


use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}
function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] == $value;
}

function authorize($conditions, $status = Response::FORBIDDEN)
{
    if (!$conditions) {
        abort($status);
    }
}
function base_path($path): string
{
    return BASE_PATH . $path;
}

function view($path,$data = [])
{
    extract($data);
    require_once(base_path("views/$path"));
}
