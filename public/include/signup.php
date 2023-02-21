<?php
session_start();
//require_once('connection.php');
header('Location: /');

$sqlDuplicationLogin = "SELECT COUNT() FROM User WHERE login='$login'";
$sqlAddUser = "INSERT INTO users (login,password) VALUES('$login','md5($password)')";

$login = $_POST['login'].trim();
$password = $_POST['password'];

if (mysql_query($conn, $sqlDuplicationLogin) > 0) {
    $_SESSION['message'] = 'Пользователь с таким логином уже существует';
    header('Location: http://localhost:8080/registration.php');
}

if (mysql_query($conn, $sqlAddUser)) {
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: http://localhost:8080/authorization.php');
} else {
    $_SESSION['message'] = 'Ошибка регистрации';
    header('Location: ../views/authorization.php');
}
