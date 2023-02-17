<?php
require_once("function.php");

$data = file_get_contents("php://input");
$dataAction = (array) json_decode($date);

if(issert($dataAction)){
    switch($dataAction["action"]){
        case "authorization":
            echo authorization();
            break;
        case "registration":
            echo registration();
            break;
        case "main":
            echo main();
            break;
    }
}
