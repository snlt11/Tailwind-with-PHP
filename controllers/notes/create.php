<?php

use Core\Database;
use Core\Validator;

require_once(base_path("Validator.php"));

$config = require_once(base_path("config.php"));

$db = new Database($config);

$errors = [];


if ($_SERVER['REQUEST_METHOD'] == 'POST') {


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

view('notes/create.view.php', [
    'heading' => "Create Note",
    'errors' => $errors
]);

