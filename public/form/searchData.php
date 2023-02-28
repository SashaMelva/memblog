<?php
session_start();
require_once("../../src/conection.php");

$search = trim($_POST['search']);

$sqlSearchData = "SELECT Post.PostName, Post.description , Post.dateCreate, CategoryPost.name, User.login
FROM Post
INNER JOIN User 
ON User.id = Post.idUser
INNER JOIN CategoryPost 
ON CategoryPost.idCategory = Post.idCategory
WHERE PostName LIKE '%$search%'";

$posts = mysqli_query($conn, $sqlSearchData);
$countPost = mysqli_num_rows($posts);

if ($countPost > 0) {
    header('Location: http://localhost:8080/');
    $_SESSION["message"] = "По данному запросу найдено " . $countPost  ." постов";
    //$_SESSION["posts"] = $posts;
} else {
    $_SESSION["message"] = "По данному запросу посты не найдены";
    header('Location: http://localhost:8080/');
}


mysqli_close($conn);