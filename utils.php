<?php
function count_task_categories($category_name, $tasks)
{
    $count = 0;

    foreach ($tasks as $task) {
        if ($task['category'] === $category_name) {
            $count++;
        }
    }
    return $count;
}
