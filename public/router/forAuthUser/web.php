<?php
require_once("function.php");

//Читает весь файл в строку
$data = file_get_contents("php://input");
// декодирует строку JSON в массив
$dataAction = (array) json_decode($date);


if(issert($dataAction)){
    switch($dataAction["actionn"]){
        case "profil":
            echo profil();
            break;
        case "new-post":
            echo newPost();
            break;
        case "main":
            echo main();
            break;
    }
}
