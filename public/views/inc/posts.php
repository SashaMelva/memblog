<section class="conteiner">
    <?php foreach ($posts as $post) :?>
    <action>
        <div class="post-content">
            <div class="post-header">
                <a class="post-a" href="">>
                    <?= $post["category_name"] ?>
                </a>
                <h2>
                    <a href="">
                        <?= $post["post_name"] ?>
                    </a>
                </h2>
            </div>
            <div class="post-main-content">
                <p>
                    <?= $post["post_description"] ?>
                </p>
            </div>
            <hr>
            <div class="post-footer">
                <p>
                    <?= $post["post_create_date"] ?>
                </p>
                <p>Автор поста:
                    <a href="">
                        <?= $post["login"] ?>
                    </a>
                </p>
            </div>
        </div>
    </action>
    <?php endforeach; ?>
</section>