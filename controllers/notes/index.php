<?php

$config = require_once(base_path("config.php"));

$db = new Database($config);


$notes = $db->query("SELECT * FROM notes WHERE user_id=1")->get();

view('notes/index.view.php', [
    'heading' => "My Notes",
    'notes' => $notes,
]);
