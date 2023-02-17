<?php


$conn = new mysqli("localhost", "user", "user", "blog_db");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}


