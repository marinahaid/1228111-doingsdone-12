

<?php
function count_task_categories($category__name, $tasks)
{
    $count = 0;
    foreach ($tasks as $task) {
        if ($task['category'] === $category__name) {
            $count++;
        }
    }
    return $count;
}

echo count_task_categories('Работа', $tasks);
