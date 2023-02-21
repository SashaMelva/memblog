<?php

function profil() {
    $path = "../../views/profil.php";

    if(file_exists($path)) {
        return file_get_contents($path);
    }
}

function newPost() {
    $path = "../../views/new-post.php";

    if(file_exists($path)) {
        return file_get_contents($path);
    }
}

function main() {
    $path = "../../views/main.php";

    if(file_exists($path)) {
        return file_get_contents($path);
    }
}