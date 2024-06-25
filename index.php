<?php

require_once("functions.php");

require_once("router.php");

require_once("Database.php");

$config = require_once("config.php");

$db = new Database($config);

$posts = $db->query("SELECT * FROM posts")->fetchAll();


foreach ($posts as $post) {
    echo "<h1>" . $post['title'] . "</h1>";
}
