<?php

//echo "Соединение с базй данных успешно!"; 

$conn = new mysqli_connect("localhost", "user", "user", "blog_db");
if(!$conn){
    die("Ошибка: " . mysqli_connect_error());
}

echo "Соединение с базй данных успешно!"; 
?>