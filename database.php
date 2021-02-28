<?php

//$link = mysqli_connect('localhost', 'root', 'root', 'doings');

//if(mysqli_connect_errno()) {
   // echo 'Ошибка подключения к базе данных ('.mysqli_connect_errno().') :' .mysqli_connect_error();
   // exit();
//}

$servername = 'localhost';
$database = 'doings';
$username = 'root';
$password = 'root';
$con = mysqli_connect('localhost','root', 'root', 'doings' );
if (!$con) {
    die ("Connection failed:" . mysqli_connect_error());
    }
    echo "Connected successfully";
    mysqli_close($con);


function select_category() {
    $query = "SELECT name, users_id FROM categories WHERE users_id = 1";//Отправьте SQL-запрос для получения списка проектов у текущего пользователя
    $res = mysqli_query($con, $query);

    $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
  // foreach ($rows as $row) {
       // print ("Пользователь: " . $row['users_id'] . "; Идентификатор: . " . $row['id'] . "; Проект: . " . $row['name'] . "<br>");
       return $row;
    }

function select_tasks() {
 $query = "SELECT put_date, status, deadline FROM tasks WHERE category_id = 1;"; //Отправьте SQL-запрос для получения списка из всех задач у текущего пользователя.
 $res = mysqli_query($con, $query);

 $row = mysqli_fetch_all($res, MYSQLI_ASSOC);
// foreach ($rows as $row) {
     return $row;
}


