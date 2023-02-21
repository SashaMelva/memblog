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
        <label></label>
        <input type="checkbox">
    </div>
</section>

<section class="conteiner">
    <?php foreach ($posts as $post) : ?>
    <action>
        <div class="post-content">
            <div class="post-header">
                <a class="post-a" href="">>
                    <?= $user->geCategory() ?>Категория
                </a>
                <h2><a href="">
                        <?= $user->geNamePost() ?>Название поста
                    </a></h2>
            </div>
            <div class="post-main-content">
                <p>
                    <?= $user->getDescroptionPost() ?>Описание поста цфщжацкшаожщыукпаоптдыфукжуопщушпофщкаоуктщкфпжу
                </p>
            </div>
            <hr>
            <div class="post-footer">
                <p>
                    <?= $user->getDateCreat() ?>12-03-2023
                </p>
                <p>Автор поста: <a href="">
                        <?= $user->getUserPost() ?>User
                    </a> </p>
            </div>
        </div>
    </action>
    <?php endforeach; ?>
</section>