<?php

$config = require_once("config.php");

$db = new Database($config);

$currentUserId = 1;

$heading = "Note";

$note = $db->query("SELECT * FROM notes WHERE id= :id", [
    'id' => $_GET['id']
])->fetch();

if (!$note) {
    abort(404);
}
if ($note['user_id'] !== $currentUserId) {
    abort(Response::FORBIDDEN);
}


require_once('./views/note.view.php');
