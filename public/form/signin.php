<?php
session_start();
require_once('../../src/conection.php');

$login = trim($_POST['login']);
$password = $_POST['password'];

$sqlSelectCountUser = "SELECT * From users WHERE login = '$login'";
$chekUser = mysqli_query($conn, $sqlSelectCountUser);


if (mysqli_num_rows($chekUser) == 1) {
    $user = mysqli_fetch_assoc($chekUser);
    if ($user['password'] == $password) {
        $_SESSION['userId'] = $user['user_id'];
        $_SESSION['userLogin'] =  $user['login'];
        header('Location: http://localhost:8080/views/authoriz_user.php');
    } else {
        $_SESSION['message'] = 'Вы ввели неверны пароль';
        header('Location: http://localhost:8080/views/authorization.php');
    }
} else {
    $_SESSION['message'] = 'Пользователя с таким логином не существует';
    header('Location: http://localhost:8080/views/authorization.php');
}

mysqli_close($conn);