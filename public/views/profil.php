<?php 
session_start();
if ($_SESSION['userLogin'] == null) {
    header('Location: http://localhost:8080/views/authorization.php');
}

?>

<!DOCTYPE html>
<html lang="en" class="page">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/src/style/styles.css">

    <title>Обновление профиля</title>
</head>

<body class="grid-main-content">
    <?php
        require_once("inc/auth_haeder.php");
    ?>
    <main class="main-content">
        <section class="conteiner container-form ">
            <div class="display-form display-add-post actual-profil">
                <div class="header-form content-form">
                    <legend class="legend-form">Профиль</legend>
                    <button class="btn-form-exit"><img class="img-close" src="/src/img/close.png" alt="Закрыть"></button>
                </div>
                <div class="content-form">
                    <label>Ваш логин</label>
                    <input readonly="readonly" type="text" class="input-form" value = <?= $_SESSION['userLogin']?>>
                    <a href="/index.php">
                        Выход из аккаунта
                    </a>
                    <?php 
                        if($_SESSION['message']) {
                            echo '<p class="error">'. $_SESSION['message'] .'</p>';
                        }
                        unset($_SESSION['message']);
                    ?>
                </div>
                <button class="btn btn-profil" onclick="changeProfile()">Изменить профиль</button>
            </div>

            <div class="display-form display-add-post changed-profil" style="display:none;">
                <div class="header-form content-form">
                    <legend class="legend-form">Профиль</legend>
                    <button class="btn-form-exit"><img class="img-close" src="/src/img/close.png" alt="Закрыть"></button>
                </div>
                <form class="content-form" action="../form/updateProfil.php" method="POST" onsubmit="return validateFormUpdateProfil()">
                    <label for="login" class="label-login">Ваш логин</label>
                    <input type="text" id="login" name="login" class="input-form" placeholder="Добавить название" value = <?= $_SESSION['userLogin']?>>
                    
                    <label for="password" class="text-input-form label-password">Введите старый пароль</label>
                    <input id="password" name="password" type="password" class="input-form" placeholder="password">
                    
                    <label for="replay-password" class="text-input-form label-replay-password">Введите новый пароль</label>
                    <input id="replay-password" name="replay-password" type="password" class="input-form" placeholder="password">
                    <p class="error"></p>
                    <input class="btn" value="Обновить" type="submit"></input>
                </form>
                <button id="btn-check-password" class="btn-check-password-reg-form" onclick="cheeckedPassword()">
                    <img class="img-check-password" src="/src/img/icon-eye-close.png" alt="">
                </button>
                <button id="btn-check-password-replay" class="btn-check-password-replay-reg-form" onclick="cheeckedReplayPassword()">
                    <img class="img-check-password-replay img-check-password" src="/src/img/icon-eye-close.png" alt="">
                </button>
                <button class="btn btn-profil" onclick="actualProfil()">Отмена</button>
            </div>
        </section>
    </main>
    <?php
        require_once("inc/auth_footer.php");
    ?>
    <script src="/js/main.js"></script>
</body>
</html>