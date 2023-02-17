<section class="conteiner container-form ">
    <div class="display-form">
        <div class="header-form content-form">
            <legend class="legend-form">Авторизация</legend>
            <button class="btn-form-exit"><img class="img-close" src="../src/img/close.png" alt="Закрыть"></button>
        </div>
        <form id="formAuthorization" class="content-form" action="" method="POST" onsubmit="return validateFormAuthorization()">
            <label for="login" class="text-input-form label-login">Введите логин</label>
            <input id="login" name="login" type="text" class="input-form" placeholder="login" require>
            <label for="password" class="text-input-form label-password">Введите пароль</label>
            <input id="password" type="password" class="input-form" placeholder="password" require>
            <button class="btn" type="submit">Вход</button>
        </form>
        <div class="dtn-out-form">
            <button id="registration" onclick="registration()" class="btn btn-registration">Регистрация</button>
        </div>
        <button id="btn-check-password" class="btn-check-password-auth-form " onclick="cheeckedPassword()" ><img class="img-check-password" src="../src/img/icon-eye-close.png" alt=""></button>
    </div>
</section>

