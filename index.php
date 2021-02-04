<?php
require_once('data.php');
require_once('helpers.php');

$content_main = include_template('main.php', [
    'categories' => $categories,
     'tasks' => $tasks]);

  $layout = include_template('layout.php', [
    'title' => $title, 'content' => $content_main]);
    echo $layout;
?>