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



function select_categories()
{
    $query = "SELECT name, id FROM categories WHERE users_id = 1"; //Отправьте SQL-запрос для получения списка проектов у текущего пользователя
    $res = mysqli_query($con, $query);
    $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return ($row);
}
$row->$categories;



function select_tasks($categories_id)
{
    $query = "SELECT put_date, status, deadline FROM tasks WHERE category_id = 1;"; //Отправьте SQL-запрос для получения списка из всех задач у текущего пользователя.
    $res = mysqli_query($con, $query);
    $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
    $rows->tasks;
}
select_tasks();
