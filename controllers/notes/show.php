<?php

$config = require_once("config.php");

$db = new Database($config);

$currentUserId = 1;

$heading = "Note";

$note = $db->query("SELECT * FROM notes WHERE id= :id", [
    'id' => $_GET['id']
])->findOrFail();


authorize($note['user_id'] == $currentUserId);

require_once('./views/notes/show.view.php');
