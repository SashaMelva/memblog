<?php
session_start();
//require_once('connection.php');
header('Location: /');
$login = $_POST['login'].trim();
$password = md5($_POST['password']);

$sqlSelectCountUser = "SELECT * From User WHERE login == '$login '";
$chekUser = mysql_query($conn, $sqlSelectCountUser);


if ( mysqli_num_rows($chekUser) == 1) {
    $user = mysqli_fetcch_assoc($chekUser);
    if ($user['password'] == $password) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'login' => $user['login'],
        ];
        //header('Location: ../views/profil.php');
        header('Location: http://localhost/profil.php');

    } else {
        $_SESSION['message'] = 'Вы ввели неверны пароль';
        header('Location: ../views/authorization.php');
    }
} else {
    $_SESSION['message'] = 'Пользователя с таким логином не существует';
    header('Location: ../views/authorization.php');
}