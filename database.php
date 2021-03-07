<?php

/**
 * @param const SERVER_NAME string
 * @param const DATA_BASE string
 * @param const USER_NAME string
 * @param const PASSWORD string
 * @param function mysqli_connect получить ресурс соединения
 */
const SERVER_NAME = 'localhost';
const DATA_BASE = 'doings';
const USER_NAME = 'root';
const PASSWORD = 'root';

$con = mysqli_connect(SERVER_NAME, USER_NAME, PASSWORD, DATA_BASE);
if (!$con) {
    die("Connection failed:" . mysqli_connect_error());
}

/**
 * @param function select_categories -функция получение категорий из бд 
 * @param var $query_categories string - переменная получение name и id по users_id из таблицы с проектами
 * @param var  $res string- получение данных из бд
 * @param var  $tasks string - преобразование данных в массив
 * @param возврат результата преобразованногов массив
 */

function select_categories()
{
    $query_categories = "SELECT name, id FROM categories WHERE users_id = 1";
    $res = mysqli_query($con, $query_categories); //переменная $con невидима. Как ее передать, чтобы она была видна в теле функции?
    $categories = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return ($categories);
}


/**
 * @param function select_tasks -функция получение задач для одной категории из бд 
 * @param var $query_tasks string - переменная данных по category_id из таблицы с задачами
 * @param var  $res string- получение данных из бд
 * @param var  $tasks string - преобразование данных в массив
 * @param возврат результата преобразованногов массив
 */
function select_tasks($categories_id) // categories_id параметр как мы используем? Почему мы тогда не используем параметр для функции select_categories?
{
    $query_tasks = "SELECT put_date, status, deadline FROM tasks WHERE category_id = 1;";
    $res = mysqli_query($con, $query_tasks);
    $tasks = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return ($tasks);
}