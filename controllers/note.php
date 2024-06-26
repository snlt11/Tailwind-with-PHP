<?php

$config = require_once("config.php");

$db = new Database($config);

$heading = "Note";

$note = $db->query("SELECT * FROM notes WHERE id= :id", ['id' => $_GET['id']])->fetch();

require_once('./views/note.view.php');
