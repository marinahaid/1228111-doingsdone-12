<?php
require_once('utils.php');
require_once('data.php');
require_once('helpers.php');
require_once('time.php');

$show_complete_tasks = rand(0, 1);
$content_main = include_template('main.php', [
    'categories' => $categories,
     'tasks' => $tasks,
     'show_complete_tasks' => $show_complete_tasks]);

  $layout = include_template('layout.php', [
    'title' => $title, 'content' => $content_main]);
    echo $layout;
?>