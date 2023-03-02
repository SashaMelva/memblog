<?php
session_start();
if ($_SESSION['userLogin'] == null) {
    header('Location: http://localhost:8080/views/authorization.php');
}
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
    <?php
        require_once("inc/auth_haeder.php");
    ?>
    <?php if ($_SESSION['messagePost']) :?>
        <div class="div-message">
            <?php
                echo ($_SESSION['messagePost']);
                unset($_SESSION['messagePost']);
            ?>
            <button onclick="closeWinMessage()" class="btn-message-code">Закрыть</button>
        </div>
    <?php endif; ?>
    <main class="main-content">
        <section class="conteiner container-form ">
            <div class="display-form display-add-post">
                <div class="header-form content-form">
                    <legend class="legend-form">Новый пост</legend>
                    <button class="btn-form-exit"><img class="img-close" src="/src/img/close.png" alt="Закрыть"></button>
                </div>
                <form action="/form/addPost.php" method="POST" class="content-form" onsubmit="return validationNewPost()">
                    <label for="namePost" class="label-name-post text-input-form"></label>
                    <input id="namePost" type="text" name="postName" class="input-form" placeholder="Добавить название">
                    <textarea name="decriptionPost" class="area input-form" placeholder="Добавить описание"></textarea>
                    <label>Выберите категорию</label>
                    <select name="category" class="input-form">
                        <?php foreach ($categories as $category) :?>
                            <option value=<?= $category["category_id"]?>>
                                <?= $category["category_name"]?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <input class="btn" type="submit" value="Сохранить"></input>
                </form>
            </div>
        </section>
    </main>
    <?php
        require_once("inc/auth_footer.php");
    ?>
    <script src="/js/main.js"></script>
</body>
</html>