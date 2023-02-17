<?php

function authorization() {
    $content ="";
    $path = "../views/authorization.php";

    if(file_exists($path)) {
        $content = file_get_contents($path);

    }
    return $content;
}

function registration() {
    $content ="";
    $path = "../views/registration.php";

    if(file_exists($path)) {
        $content = file_get_contents($path);

    }
    return $content;
}

function main() {
    $content ="";
    $path = "../views/main.php";

    if(file_exists($path)) {
        $content = file_get_contents($path);

    }
    return $content;
}