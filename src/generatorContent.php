<?php
//session_start();
require_once('conection.php');

$sqlPosts = "SELECT Post.name, Post.description , Post.dateCreate, CategoryPost.name
FROM Post 
LEFT JOIN CategoryPost 
ON CategoryPost.idCategory = Post.idCategory ";

$posts = mysqli_query($conn, $sqlPosts);


$sqlCategory = "SELECT * FROM CategoryPost";
$categories = mysqli_query($conn, $sqlCategory);


mysqli_close($conn);