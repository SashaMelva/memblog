
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
                    <li><a id="profil" class="a-header" href="/views/profil.php">Профиль</a></li>
                    <li><a id="new-post" class="a-header" href="/views/new_post.php">Новый пост</a></li>
                    <li><a id="main" class="a-header" href="/views/authoriz_user.php">Главная</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <?php if ($_SESSION['message']) :?>
        <div class="div-message">
            <?php
                echo ($_SESSION['message']);
                unset($_SESSION['message']);
            ?>
            <button onclick="closeWinMessage()" class="btn-message-code">Закрыть</button>
        </div>
    <?php endif; ?>
    <main class="main-content">
    <section class="conteiner header-main-conteiner">
            <div class="header-main">
                <button class="btn-burger" onclick="categoryPost()"><img src="/src/img/burger.png"></button>
            </div>
            <div class="category-post" style="display:none;">
                <div>
                    <form action="/form/searchData.php" method="GET">
                        <label for="search" class="text-input-form">Поиск постов по названию</label>
                        <input id="search" name="search" class="input-form input-search-post" type="test">
                    </form>
                </div>
            </div>
        </section>
        <section class="conteiner">
            <?php foreach ($posts as $post) : ?>
                <action>
                    <div class="post-content">
                        <div class="post-header">
                            <a class="post-a" href="">> Категория</a>
                            <h2>
                                <a href="">
                                    <?= $post->name ?>Название поста
                                </a>
                            </h2>
                        </div>
                        <div class="post-main-content">
                            <p>
                                <?= $post->description  ?>Описание поста цфщжацкшаожщыукпаоптдыфукжуопщушпофщкаоуктщкфпжу
                            </p>
                        </div>
                        <hr>
                        <div class="post-footer">
                            <p>
                                <?= $post->dateCreate  ?>12-03-2023
                            </p>
                            <p>Автор поста: 
                                <a href="">
                                    <?= $post->idUser?>User
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
                    <li><a id="profil" class="a-header" href="/views/profil.php">Профиль</a></li>
                    <li><a id="new-post" class="a-header" href="/views/new_post.php">Новый пост</a></li>
                    <li><a id="main" class="a-header" href="/views/authoriz_user.php">Главная</a></li>
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