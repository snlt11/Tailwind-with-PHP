<?php

$config = require_once("config.php");

$db = new Database($config);

$heading = "My Notes";

$notes = $db->query("SELECT * FROM notes WHERE user_id=1")->fetchAll();

require_once('./views/notes.view.php');
