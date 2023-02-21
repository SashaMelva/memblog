<?php
//session_start();
//require_once("../DB/Controller/RedistrationController.php");
?>

<section class="conteiner container-form ">
    <div class="display-form">
        <div class="header-form content-form">
            <legend class="legend-form">Регистрация</legend>
            <button class="btn-form-exit"><img class="img-close" src="../src/img/close.png" alt="Закрыть"></button>
        </div>
        <form class="content-form" action="../include/signup.php" method="POST"
            onsubmit="return validateFormRegistration()">
            <label class="text-input-form label-login">Введите логин</label>
            <input id="login" name="login" type="text" class="input-form" placeholder="login">
            <label class="text-input-form label-password">Введите пароль</label>
            <input id="password" name="password" type="password" class="input-form" placeholder="password">
            <label class="text-input-form label-replay-password">Введите пароль повторно</label>
            <input id="replay-password" type="password" class="input-form" placeholder="password">
            <p class="error"></p>
            <?php 
               if($_SESSION['message']) {
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