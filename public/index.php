<?php
//session_start();
require_once('../src/conection.php');
/*require_once('include/signin.php');
session_start();
if ($_SESSION['user']) {
    header('Location: profil.php');
}*/
?>
<!DOCTYPE html>
<html lang="en" class="page">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="src/style/styles.css">

    <title>Блог</title>
</head>

<body class="grid-main-content">
    <header class="content-header">
        <div class="conteiner conteiner-header">
            <div>
                <img class="img-logo" src="src/img/blogging.png" alt="Логотип">
            </div>
            <nav class="nav navigation-header">
                <ul class="navigation-core">
                    <li><a id="authorization" class="a-header" href="#">Авторизация</a></li>
                    <li><a id="main" class="a-header" href="#">Главная</a></li>
                </ul>
            </nav>
        </div>
    </header>
<div class="div-message">
    <?php
    
  //  require_once('include/firstData.php');
    
    //require_once('include/signup.php');

    //$_SESSION['message']
    ?>
    <button onclick="closeWinMessage()" class="btn-message-code">Закрыть</button>
</div>
    <main class="main-content" id="app"></main>

    <footer class="content-footer">
        <div class="conteiner container-footer">
            <nav>
                <ul class="navigation-core-header">
                    <li><a class="a-footer" href="#">Авторизация</a></li>
                    <li><a class="a-footer" href="#">Главная</a></li>
                </ul>
            </nav>

            <div>
                <p>Данный проект реализован не для продажи</p>
                <p>Ссылка на GitHub разработчика: </p>
            </div>
        </div>
    </footer>

    <script src="js/main.js"></script>
    <script src="/router/routering.js"></script>
    <script>
        let navbar = document.querySelector(".nav");
        navbar.addEventListener("click", setActionValue);

        function registration() {
            let btn = document.querySelector("#registration");
            btn.addEventListener("click", setActionValue);
        }
        defaultPage();
        
    </script>
   
</body>

</html>


