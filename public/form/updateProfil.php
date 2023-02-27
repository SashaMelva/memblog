<?php
session_start();
require_once('../../src/conection.php');


$newLogin = trim($_POST['login']);
$newPassword = $_POST['replay-password'];
$formPassword = $_POST['password'];

$idUser = $_SESSION['userId'];


$sqlOldPassword = "SELECT password From User WHERE id='$idUser' LIMIT 1";
$sqlDuplicationLogin = "SELECT * FROM User WHERE login='$newLogin' LIMIT 1";
$sqlUpdateUser = "UPDATE User SET login='$newLogin', password='$newPassword' WHERE id='$idUser'";



$oldPassword = mysqli_query($conn, $sqlOldPassword);
$countDuplicateLogin = mysqli_query($conn, $sqlDuplicationLogin);


if ($oldPassword != $formPassword) {
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