<?php
session_start();
require_once('connection.php');


$login = trim($_POST['login']);
$password = $_POST['password'];

$sqlSelectCountUser = "SELECT * From User WHERE login = '$login'";
$chekUser = mysqli_query($conn, $sqlSelectCountUser);


if (mysqli_num_rows($chekUser) == 1) {
    $user = mysqli_fetch_assoc($chekUser);
    if ($user['password'] == $password) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'login' => $user['login'],
        ];
        header('Location: http://localhost:8080/views/authoriz_user.php');
    } else {
        $_SESSION['message'] = 'Вы ввели неверны пароль';
        header('Location: /');
    }
} else {
    $_SESSION['message'] = 'Пользователя с таким логином не существует';
    header('Location: /');
}
mysqli_close($conn);