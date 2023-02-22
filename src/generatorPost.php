<?php
//session_start();
require_once('connection.php');

$sqlPosts = "SELECT * FROM Post";
$posts = mysqli_query($conn, $sqlPosts);





mysqli_close($conn);