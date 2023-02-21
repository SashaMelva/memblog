
<section class="conteiner container-form ">
<div class="display-form display-add-post actual-profil">
            <div class="header-form content-form">
                <legend class="legend-form">Профиль</legend>
                <button class="btn-form-exit"><img class="img-close" src="../src/img/close.png" alt="Закрыть"></button>
            </div>
            <div class="content-form">
                <label>Ваш логин</label>
                <input readonly="readonly" type="text" re name="login" class="input-form" placeholder="Добавить название">
            </div>
            <button class="btn btn-profil" onclick="changeProfile()">Изменить профиль</button>
        </div>

        <div class="display-form display-add-post changed-profil" style="display:none;">
            <div class="header-form content-form">
                <legend class="legend-form">Профиль</legend>
                <button class="btn-form-exit"><img class="img-close" src="../src/img/close.png" alt="Закрыть"></button>
            </div>
            <form class="content-form">
                <label>Ваш логин</label>
                <input type="text" re name="login" class="input-form" placeholder="Добавить название">
                <label class="text-input-form label-password">Введите старый пароль</label>
            <input id="password" name="password" type="password" class="input-form" placeholder="password">
            <label class="text-input-form label-replay-password">Введите новый пароль</label>
            <input id="replay-password" type="password" class="input-form" placeholder="password">
            <p class="error"></p>
            <?php 
               if($_SESSION['message']) {
                  echo '<p class="error">'. $_SESSION['message'] .'</p>';
                }
               unset($_SESSION['message']);
            ?>
            <input class="btn" value="Обновить" type="submit"></input>
            </form>
            <button id="btn-check-password" class="btn-check-password-reg-form" onclick="cheeckedPassword()"><img
                class="img-check-password" src="../src/img/icon-eye-close.png" alt=""></button>
        <button id="btn-check-password-replay" class="btn-check-password-replay-reg-form"
            onclick="cheeckedReplayPassword()"><img class="img-check-password-replay img-check-password"
                src="../src/img/icon-eye-close.png" alt=""></button>
                <button class="btn btn-profil" onclick="actualProfil()">Отмена</button>
        </div>
    </section>

