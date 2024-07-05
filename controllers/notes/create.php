<?php

$heading = "Create Note";

require("Validator.php");

$config = require_once("config.php");

$db = new Database($config);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $errors = [];
    
    if (! Validator::string($_POST['body'], 1, 1000)) {
        $errors['body'] = "A body must be between 1 and 1000 characters long.";
    }

    if (empty($errors)) {
        $db->query('INSERT INTO `notes`(`body`, `user_id`) VALUES (:body, :user_id)', [
            'body' => $_POST['body'],
            'user_id' => 1
        ]);
    }
}

require_once('./views/notes/create.view.php');
