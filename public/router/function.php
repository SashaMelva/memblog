<?php

function authorization() {
    $path = "../views/authorization.php";

    if(file_exists($path)) {
        return file_get_contents($path);
    }
}

function registration() {
    $path = "../views/registration.php";

    if(file_exists($path)) {
        return file_get_contents($path);
    }
}

function main() {
    $path = "../views/main.php";

    if(file_exists($path)) {
        return file_get_contents($path);
    }
}