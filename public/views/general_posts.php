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
        require_once("inc/message.php");
    ?>
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
        <?php 
            require_once("inc/posts.php");
        ?>
    </main>
    <?php 
        require_once("inc/footer.php"); 
    ?>
    <script src="/js/main.js"></script>
</body>

</html>