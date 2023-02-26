<?php
//session_start();
//require_once('../src/conection.php');
/*require_once('include/signin.php');
session_start();
if ($_SESSION['user']) {
    header('Location: profil.php');
}*/
require_once("../src/generatorContent.php");
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
                    <li><a id="authorization" class="a-header" href="views/authorization.php">Авторизация</a></li>
                    <li><a id="main" class="a-header" href="#">Главная</a></li>
                </ul>
            </nav>
        </div>
    </header>
   <!-- <div class="div-message">
        <?php
        
        //require_once('../src/firstData.php');
        
        //require_once('include/signup.php');

        //$_SESSION['message']
        ?>
        <button onclick="closeWinMessage()" class="btn-message-code">Закрыть</button>
    </div>-->
    <main class="main-content">
        <section class="conteiner header-main-conteiner">
            <div class="header-main">
                <button class="btn-burger" onclick="categoryPost()"><img src="../src/img/burger.png"></button>
                <div>
                    <label class="text-input-form">Поиск постов по названию</label>
                    <input name="search" class="input-form input-search-post" type="test">
                </div>

            </div>
            <div class="category-post" style="display:none;">
                <p>Выберите категории постов</p>
                <?php foreach ($categories as $category) : ?>
                   <div>
                        <input type="checkbox">
                        <label>
                            <?= $category["name"]?>
                        </label>
                    </div> 
                <?php endforeach; ?>
            </div>
        </section>
      
        <section class="conteiner">
            <?php foreach ($posts as $post) :?>
            <action>
                <div class="post-content">
                    <div class="post-header">
                        <a class="post-a" href="">> <?= $post["CategoryPost.name"] ?></a>
                        <h2>
                            <a href="">
                                <?= $post["name"] ?>
                            </a>
                        </h2>
                    </div>
                    <div class="post-main-content">
                        <p>
                            <?= $post["description"] ?>
                        </p>
                    </div>
                    <hr>
                    <div class="post-footer">
                        <p>
                            <?= $post["dateCreate"] ?>
                        </p>
                        <p>Автор поста: 
                            <a href="">
                                <?= $post["idUser"] ?>
                            </a> 
                        </p>
                    </div>
                </div>
            </action>
            <?php endforeach; ?>
        </section>
    </main>

    <footer class="content-footer">
        <div class="conteiner container-footer">
            <nav>
                <ul class="navigation-core-header">
                    <li><a class="a-footer" href="views/authorization.php">Авторизация</a></li>
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
    <script>
    /*function categoryPost() {
        alert();
        let formCategory = document.querySelector(".category-post");
        if (r % 2 == 0) {
            formCategory.style.display = 'none';
        }
        if (r % 2 > 0) {
            formCategory.style.display = 'block';
        }
        r++;
    }*/
    </script>
</body>

</html>