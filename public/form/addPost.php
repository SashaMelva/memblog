<?php
session_start();
require_once('../../src/conection.php');

$namePost = trim($_POST["postName"]);
$descriptionPost = $_POST["decriptionPost"];
$idCategory = $_POST['category'];
$authtor = $_SESSION['userId'];
$dateCreate = date("Y.m.d H:i:s");


$sqlAddPost = "INSERT INTO posts 
(post_name , post_description, post_create_date, post_category_id, post_user_id) 
VALUES('$namePost','$descriptionPost', '$dateCreate', '$idCategory','$authtor')";

if (mysqli_query($conn, $sqlAddPost)) {
    $_SESSION['messagePost'] = 'Пост создан';
    header('Location: http://localhost:8080/views/new_post.php');
} else {
    $_SESSION['messagePost'] = 'Ошибка создания поста';
    header('Location: http://localhost:8080/views/new_post.php');
}
mysqli_close($conn);
 