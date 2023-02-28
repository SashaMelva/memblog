<?php
session_start();
require_once("../../src/conection.php");

$search = trim($_GET['search']);

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
    $_SESSION["message"] = "По данному запросу найдено " . $countPost  ." постов";
} else {
    $_SESSION["message"] = "По данному запросу посты не найдены";
}

$sqlCategory = "SELECT * FROM CategoryPost";
$categories = mysqli_query($conn, $sqlCategory);

mysqli_close($conn);
require_once("../general_html.php");