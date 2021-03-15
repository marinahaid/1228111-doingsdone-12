<?php

/**
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
 * @param $con string
 * @param возврат результата преобразованного массива
 */

function select_categories($con, $users_id)
{
    $query_categories = "SELECT name, id FROM categories WHERE users_id = $users_id";;
    $res = mysqli_query($con, $query_categories);
    $categories = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return ($categories);
}

/**
 * @param var $con string
 * @param var $categories_id string
 * @param возврат результата преобразованного массива
 */
function select_tasks($con, $categories_id) 
{
    $query_tasks = "SELECT put_date, status, deadline FROM tasks WHERE category_id = $categories_id;";
    $res = mysqli_query($con, $query_tasks);
    $tasks = mysqli_fetch_all($res, MYSQLI_ASSOC);
    return ($tasks);
}