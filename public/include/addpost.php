<?php
session_start();
//require_once('connection.php');

$namePost = $_POST['namePost'];
$categoryPost = $_POST['categoryPost'];
$descriptionPost = $_POST['descriptionPost'];
$deteCreate = getdate();
$userPost = "";


$path ='uploads/' . time() . $_FILES['imgPost']['name'];
if(!move_uploaded_file($_FILES['imgPost']['tmp_name'], '../' .$path)){
    $_SESSION['message'] = 'Ошибка при загрузке изображения';
    header('Location: ../views/new_post.php');
}