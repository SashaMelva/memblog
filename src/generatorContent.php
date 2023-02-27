<?php

require_once('conection.php');

$sqlPosts = "SELECT /*Post.PostName,*/ Post.description , Post.dateCreate, CategoryPost.name, User.login
FROM Post 
INNER JOIN User 
ON User.id = Post.idUser
INNER JOIN CategoryPost 
ON CategoryPost.idCategory = Post.idCategory";

$posts = mysqli_query($conn, $sqlPosts);


$sqlCategory = "SELECT * FROM CategoryPost";
$categories = mysqli_query($conn, $sqlCategory);



mysqli_close($conn);