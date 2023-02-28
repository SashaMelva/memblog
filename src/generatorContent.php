<?php
require_once('conection.php');

$sqlPosts = "SELECT p.post_name, p.post_description , p.post_create_date, c.category_name, u.login
FROM posts AS p
INNER JOIN users AS u 
ON u.user_id = p.post_user_id
INNER JOIN categories_posts AS c 
ON c.category_id = p.post_category_id";


$posts = mysqli_query($conn, $sqlPosts);

$sqlCategory = "SELECT * FROM categories_posts";
$categories = mysqli_query($conn, $sqlCategory);


mysqli_close($conn);