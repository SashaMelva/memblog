<?php
session_start();
require_once("../../src/conection.php");

$search = trim($_GET['search']);

$sqlSearchData = "SELECT DISTINCT p.post_name, p.post_description , p.post_create_date, c.category_name, u.login
FROM posts AS p
INNER JOIN users AS u 
ON u.user_id = p.post_user_id
INNER JOIN categories_posts AS c 
ON c.category_id = p.post_category_id
WHERE post_name LIKE '%$search%'";

$posts = mysqli_query($conn, $sqlSearchData);
$countPost = mysqli_num_rows($posts);

if ($countPost > 0) {
    $_SESSION["message"] = "По данному запросу найдено " . $countPost  ." постов";
} else {
    $_SESSION["message"] = "По данному запросу посты не найдены";
}

$sqlCategory = "SELECT * FROM categories_posts";
$categories = mysqli_query($conn, $sqlCategory);

mysqli_close($conn);

require_once("../general_html.php");