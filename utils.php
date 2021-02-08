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


#$time = strtotime($task['date']); // Исходная дата
#$cur_date = date_create($task['date']); 
#$warning = 86400;
 
#$interval = date_diff($cur_date, $warning);

$time = strtotime($task['date']);
$middle = strtotime($time);
$warning = 86400;
 
$new_date = date_diff($middle, $warning); 
