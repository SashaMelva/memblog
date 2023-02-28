<?php
$conn = mysqli_connect("memblog-mysql-1", "user", "user", "blog_db");
//$conn = mysqli_set_charset($conn, "utf8"); 

if (!$conn) {
    echo "Соединение died!!!!!!!!!!!!!!!!!!!!!!!!!"; 
    die("Ошибка: " . mysqli_connect_error());
}
//echo "Соединение с базй данных успешно!"; 