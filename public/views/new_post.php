<?php
require_once("../../src/generatorContent.php");
?>
<!DOCTYPE html>
<html lang="en" class="page">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/src/style/styles.css">

    <title>Новый пост</title>
</head>

<body class="grid-main-content">

    <header class="content-header">
        <div class="conteiner conteiner-header">
            <div>
                <img class="img-logo" src="/src/img/blogging.png" alt="Логотип">
            </div>
            <nav class="nav navigation-header">
                <ul class="navigation-core">
                    <li><a id="profil" class="a-header" href="profil.php">Профиль</a></li>
                    <li><a id="new-post" class="a-header" href="new_post.php">Новый пост</a></li>
                    <li><a id="main" class="a-header" href="authoriz_user.php">Главная</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="main-content">
    <div class="div-message">
        <?php
            echo ($_SESSION['messagePost']);
            unset($_SESSION['messagePost']);
        ?>
        <button onclick="closeWinMessage()" class="btn-message-code">Закрыть</button>
    </div>
        <section class="conteiner container-form ">
            <div class="display-form display-add-post">
                <div class="header-form content-form">
                    <legend class="legend-form">Новый пост</legend>
                    <button class="btn-form-exit"><img class="img-close" src="../src/img/close.png" alt="Закрыть"></button>
                </div>
                <form action="/form/addPost.php" method="POST" class="content-form">
                    <label class="text-input-form"></label>
                    <input id="namePost" type="text" name="postName" class="input-form" placeholder="Добавить название">
                    <textarea name="decriptionPost" class="area input-form" placeholder="Добавить описание"></textarea>
                    <label>Выберите категорию</label>
                    <select name="category" class="input-form">
                        <?php foreach ($categories as $category) :?>
                            <option value=<?= $category["category_name"]?>>
                                <?= $category["category_name"]?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <input class="btn" type="submit" value="Сохранить"></input>
                </form>
            </div>
        </section>
    </main>
    <footer class="content-footer">
        <div class="conteiner container-footer">
            <nav>
                <ul class="navigation-core-header">
                <li><a id="profil" class="a-header" href="profil.php">Профиль</a></li>
                    <li><a id="new-post" class="a-header" href="new_post.php">Новый пост</a></li>
                    <li><a id="main" class="a-header" href="authoriz_user.php">Главная</a></li>
                </ul>
            </nav>

            <div>
                <p>Данный проект реализован не для продажи</p>
                <p>Ссылка на GitHub репозитоий: </p>
            </div>
        </div>
    </footer>
    <script src="/js/main.js"></script>
</body>
</html>