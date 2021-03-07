<?php
require_once('utils.php');
require_once('data.php');
require_once('helpers.php');
require_once('database.php');

$show_complete_tasks = rand(0, 1);
$content_main = include_template('main.php', [
  'categories' => $categories,
  'tasks' => $all_tasks,
  'show_complete_tasks' => $show_complete_tasks,
]);

$layout = include_template('layout.php', [
  'title' => "Дела в порядке", 'content' => $content_main
]);
echo $layout;


$categories = select_categories();
foreach ($categories as $category) {
  $all_tasks[] = [
    'name' => $category['name'], //окуда мы взяли 'name'?
    'tasks' => select_tasks($category['id']) //окуда мы взяли 'tasks'? 
  ];
}
