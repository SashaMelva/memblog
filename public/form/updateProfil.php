<?php
session_start();
require_once('../../src/conection.php');


$newLogin = trim($_POST['login']);
$newPassword = $_POST['replay-password'];
$formPassword = $_POST['password'];

$idUser = $_SESSION['userId'];


$sqlOldPassword = "SELECT password From users WHERE user_id='$idUser' AND password='$formPassword' LIMIT 1";
$sqlDuplicationLogin = "SELECT * FROM users WHERE login='$newLogin' LIMIT 1";
$sqlUpdateUser = "UPDATE users SET login='$newLogin', password='$newPassword' WHERE user_id='$idUser'";



$oldPassword = mysqli_query($conn, $sqlOldPassword);
$countDuplicateLogin = mysqli_query($conn, $sqlDuplicationLogin);


if (mysqli_num_rows($oldPassword) == 0) {
    $_SESSION['message'] = 'Вы ввели неверный пароль';
    header('Location: http://localhost:8080/views/profil.php');
} elseif (mysqli_num_rows($countDuplicateLogin) >= 1) {
    $_SESSION['message'] = 'Пользователь с таким логином уже существует';
    header('Location: http://localhost:8080/views/profil.php');
} elseif (mysqli_query($conn, $sqlUpdateUser)) {
    $_SESSION['userLogin'] = $newLogin;
    $_SESSION['message'] = "Обновление данных успешно";
    header('Location:  http://localhost:8080/views/profil.php');
} else {
    $_SESSION['message'] = 'Ошибка обновления';
    header('Location: http://localhost:8080/views/profil.php');
}
mysqli_close($conn);