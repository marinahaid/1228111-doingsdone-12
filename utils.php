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


/**
 * Проверка задачи на важность
 * @param Array $task — текущая задача
 * @return boolean — true, если мешьше 24-х часов осталось, либо false
 */

function is_task_important($task_date)
{ //создали функцию с параметром $task_date. В нее попадет аргумент $task['date']
  $warning = 86400; // опрежеляем переменную 24ч

  $current = date('d.m.y'); //получаем текущее время
  $diff = date_diff($task_date, $current); // получаем разницу м/у заданной конечной датой и текущим временем 
  if ($diff <= $warning) { // если эта разница меньше или равна 24 ч , то правда, если нет-то ложь

    return true;
  } else {
    return false;
  }
}
    

  /*  function is_task_important($task_date) {  
$task_date = time() - (86400);
                  
$now =  date('Y-m-d');
$warning = date('Y-m-d', $task_date);
if ($now === $warning) {
return true;
}
else {
  return false;
}
      }*/
      
   

      // посмотреть разницу
      // если меньше 24 часов, 
        // то return true
      // либо return false
  
      // посмотреть разницу
      // если меньше 24 часов, 
        // то return true
      // либо return false
