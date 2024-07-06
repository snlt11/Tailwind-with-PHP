<?php

const BASE_PATH = __DIR__."/../";

require_once(BASE_PATH . "Core/functions.php");

spl_autoload_register(function ($class_name) {

    $class_name = str_replace('\\', '/', $class_name);

    require_once(base_path("{$class_name}.php"));
});

require_once(base_path("Core/router.php"));
