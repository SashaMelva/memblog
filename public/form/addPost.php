<?php
session_start();
require_once('../../src/conection.php');

$namePost = trim($_POST["postName"]);
$descriptionPost = $_POST["decriptionPost"];
$category = $_POST['category'];
$authtor = $_SESSION['userId'];
$dateCreate = date("Y.m.d H:i:s");

$sqlSelectCategory = "SELECT idCategory FROM CategoryPost WHERE name='$category'";
$categoriesFromDB = mysqli_fetch_assoc(mysqli_query($conn, $sqlSelectCategory));
$idCategory = $categoriesFromDB['idCategory'];


$sqlAddPost = "INSERT INTO Post 
(PostName , description, dateCreate, idCategory, idUser) 
VALUES('$namePost','$descriptionPost', '$dateCreate', '$idCategory','$authtor')";

if (mysqli_query($conn, $sqlAddPost)) {
    $_SESSION['messagePost'] = 'Пост создан';
    header('Location: http://localhost:8080/views/new_post.php');
} else {
    $_SESSION['messagePost'] = 'Ошибка создания поста';
    header('Location: http://localhost:8080/views/new_post.php');
}
mysqli_close($conn);
 