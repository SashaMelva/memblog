<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en" class="page">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/src/style/styles.css">

    <title>Блог</title>
</head>

<body class="grid-main-content">
    <?php
        require_once("inc/header.php");
    ?>
    <main>
        <section class="conteiner container-form ">
            <div class="display-form">
                <div class="header-form content-form">
                    <legend class="legend-form">Авторизация</legend>
                    <button class="btn-form-exit"><img class="img-close" src="/src/img/close.png"
                            alt="Закрыть"></button>
                </div>
                <form id="formAuthorization" class="content-form" action="../form/signin.php" method="POST"
                    onsubmit="return validateFormAuthorization()">
                    <label for="login" class="text-input-form label-login">Введите логин</label>
                    <input id="login" name="login" type="text" class="input-form" placeholder="login" require>
                    <label for="password" class="text-input-form label-password">Введите пароль</label>
                    <input id="password" name="password" type="password" class="input-form" placeholder="password"
                        require>
                    <?php 
                        if ($_SESSION['message']) {
                            echo '<p class="error">'. $_SESSION['message'] .'</p>';
                        }
                        unset($_SESSION['message']);
                    ?>
                    <input class="btn" type="submit" value="Вход"></input>
                </form>
                <div class="dtn-out-form">
                    <a id="registration" href="registration.php" class="btn btn-registration">Регистрация</a>
                </div>
               
                <button id="btn-check-password" class="btn-check-password-auth-form" onclick="cheeckedPassword()"><img
                        class="img-check-password" src="/src/img/icon-eye-close.png" alt=""></button>
            </div>
        </section>
    </main>
    <?php
        require_once("inc/footer.php");
    ?>
    <script src="/js/main.js"></script>
</body>