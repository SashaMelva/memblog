<?php
session_start();
require_once('../../src/conection.php');
$login = trim($_POST['login']);
$password = $_POST['password'];

$sqlDuplicationLogin = "SELECT * FROM User WHERE login='$login'";
$sqlAddUser = "INSERT INTO User (login, password) VALUES('$login','$password')";


$countDuplicateLogin = mysqli_query($conn, $sqlDuplicationLogin);

if (mysqli_num_rows($countDuplicateLogin) >= 1) {
    $_SESSION['message'] = 'Пользователь с таким логином уже существует';
    header('Location: /views/registration.php');
} elseif (mysqli_query($conn, $sqlAddUser)) {
    $_SESSION['message'] = "Регистрация успешна";
    header('Location: /views/authorization.php');
} else {
    $_SESSION['message'] = 'Ошибка регистрации';
    header('Location: /views/registration.php');
}
mysqli_close($conn);