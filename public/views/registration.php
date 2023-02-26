<?php
session_start();
//require_once('../../src/conection.php');
?>
<!DOCTYPE html>
<html lang="en" class="page">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/style/styles.css">

    <title>Блог</title>
</head>

<body class="grid-main-content">
    <header class="content-header">
        <div class="conteiner conteiner-header">
            <div>
                <img class="img-logo" src="../src/img/blogging.png" alt="Логотип">
            </div>
            <nav class="nav navigation-header">
                <ul class="navigation-core">
                    <li><a id="authorization" class="a-header" href="authorization.php">Авторизация</a></li>
                    <li><a id="main" class="a-header" href="../">Главная</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main>
        <section class="conteiner container-form ">
            <div class="display-form">
                <div class="header-form content-form">
                    <legend class="legend-form">Регистрация</legend>
                    <button class="btn-form-exit"><img class="img-close" src="../src/img/close.png"
                            alt="Закрыть"></button>
                </div>
                <form class="content-form" action="../form/signup.php" method="POST"
                    onsubmit="return validateFormRegistration()">
                    <label class="text-input-form label-login">Введите логин</label>
                    <input id="login" name="login" type="text" class="input-form" placeholder="login">
                    <label class="text-input-form label-password">Введите пароль</label>
                    <input id="password" name="password" type="password" class="input-form" placeholder="password">
                    <label class="text-input-form label-replay-password">Введите пароль повторно</label>
                    <input id="replay-password" type="password" class="input-form" placeholder="password">
                    <p class="error"></p>
                    <?php 
                        if ($_SESSION['message']) {
                            echo '<p class="error">'. $_SESSION['message'] .'</p>';
                        }
                        unset($_SESSION['message']);
                    ?>
                    <input class="btn" value="Регистрация" type="submit"></input>
                </form>
                <button id="btn-check-password" class="btn-check-password-reg-form" onclick="cheeckedPassword()"><img
                        class="img-check-password" src="../src/img/icon-eye-close.png" alt=""></button>
                <button id="btn-check-password-replay" class="btn-check-password-replay-reg-form"
                    onclick="cheeckedReplayPassword()"><img class="img-check-password-replay img-check-password"
                        src="../src/img/icon-eye-close.png" alt=""></button>
            </div>
        </section>
    </main>
    <footer class="content-footer">
        <div class="conteiner container-footer">
            <nav>
                <ul class="navigation-core-header">
                    <li><a class="a-footer" href="views/authorization.php">Авторизация</a></li>
                    <li><a class="a-footer" href="../">Главная</a></li>
                </ul>
            </nav>

            <div>
                <p>Данный проект реализован не для продажи</p>
                <p>Ссылка на GitHub разработчика: </p>
            </div>
        </div>
    </footer>
    <script src="../js/main.js"></script>
</body>
</html>