<?php
session_start();
require_once('connection.php');
//header('Location: /');
$login = trim($_POST['login']);
$password = $_POST['password'];

$sqlDuplicationLogin = "SELECT * FROM User WHERE login='$login'";
$sqlAddUser = "INSERT INTO User (login, password) VALUES('$login','$password')";
$countDuplicateLogin = mysqli_query($conn, $sqlDuplicationLogin);

if (mysqli_num_rows($countDuplicateLogin) > 0) {
    $_SESSION['message'] = 'Пользователь с таким логином уже существует';
    header('Location: /');
}

if (mysqli_query($conn, $sqlAddUser)) {
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: /');
} else {
    $_SESSION['message'] = 'Ошибка регистрации';
    header('Location: /');
}
mysqli_close($conn);