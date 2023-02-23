<!DOCTYPE html>
<html lang="en" class="page">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../src/style/styles.css">

    <title>Новый пост</title>
</head>

<body class="grid-main-content">

    <header class="content-header">
        <div class="conteiner conteiner-header">
            <div>
                <img class="img-logo" src="../src/img/blogging.png" alt="Логотип">
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
    <div class="div-message">
        <?php
        
    //  require_once('include/firstData.php');
        
        //require_once('include/signup.php');

        //$_SESSION['message']
        ?>
        <button onclick="closeWinMessage()" class="btn-message-code">Закрыть</button>
    </div>
    <main class="main-content">
        <section class="conteiner container-form ">
            <div class="display-form display-add-post">
                <div class="header-form content-form">
                    <legend class="legend-form">Новый пост</legend>
                    <button class="btn-form-exit"><img class="img-close" src="../src/img/close.png" alt="Закрыть"></button>
                </div>
                <form action="" method="POST" class="content-form">
                    <label class="text-input-form"></label>
                    <input type="text" name="" class="input-form" placeholder="Добавить название">
                    <textarea class="area input-form" placeholder="Добавить описание"></textarea>
                    <label class="text-input-form">Добавте изображение</label>
                    <div>
                        <input class="input-form input-for-add-post" type="file" accept=".png,.jpg">
                    </div>
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

    <script src="../js/main.js"></script>
    <script>
        /*function registration() {
            let btn = document.querySelector("#registration");
            btn.addEventListener("click", setActionValue);
        }*/
        

       // let navbar = document.querySelector(".nav");

       
    </script>
</body>
</html>