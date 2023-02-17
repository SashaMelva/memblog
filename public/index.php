


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
                    <li><a id="authorization" class="a-header" href="#">Авторизация</a></li>
                    <li><a id="main" class="a-header" href="#">Главная</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="main-content" id="app"></main>

    <footer class="content-footer">
        <div class="conteiner container-footer">
            <nav>
                <ul class="navigation-core-header">
                    <li><a class="a-footer" href="#">Авторизация</a></li>
                    <li><a class="a-footer" href="#">Главная</a></li>
                </ul>
            </nav>

            <div>
                <p>Данный проект реализован не для продажи</p>
                <p>Ссылка на GitHub разработчика: </p>
            </div>
    </footer>

    <script src="js/main.js"></script>
    <script src="router/routering.js"></script>
    <script>
        

        let navbar = document.querySelector(".nav");
        navbar.addEventListener("click", setActionValue);

        function registration() {
            let btn = document.querySelector("#registration");
            btn.addEventListener("click", setActionValue);
        }
        defaultPage();

        function validateFormAuthorization() {
            let login = document.querySelector("#login");
            let password = document.querySelector("#password");
            let labelLogin = document.querySelector("label.label-login");
            let labelPassword = document.querySelector("label.label-password");

            if (login.value.trim() == "" && password.value == "") {
                labelLogin.style.color = 'var(--primary-focus)';
                login.style.borderColor = 'var(--primary-focus)';
                labelPassword.style.color = 'var(--primary-focus)';
                password.style.borderColor = 'var(--primary-focus)';
                return false;
            }
            if (login.value.trim() == "") {
                labelLogin.style.color = 'var(--primary-focus)';
                login.style.borderColor = 'var(--primary-focus)';
                return false;
            }
            if (password.value == "") {
                labelPassword.style.color = 'var(--primary-focus)';
                password.style.borderColor = 'var(--primary-focus)';
                return false;
            }
        }

        function validateFormRegistration() {
            let login = document.querySelector("#login");
            let password = document.querySelector("#password");
            let replayPassword = document.querySelector("#replay-password");
            let labelLogin = document.querySelector("label.label-login");
            let labelPassword = document.querySelector("label.label-password");
            let labelReplayPassword = document.querySelector("label.label-replay-password");
            if (password.value != replayPassword.value) {
                let errorMes = document.querySelector("p.error");
                errorMes.textContent = "Пароль повторён неверно ";
                return false;
            }
            if (login.value.trim() == "" && password.value == "" && replayPassword.value == "") {
                labelLogin.style.color = 'var(--primary-focus)';
                login.style.borderColor = 'var(--primary-focus)';

                labelPassword.style.color = 'var(--primary-focus)';
                password.style.borderColor = 'var(--primary-focus)';

                labelReplayPassword.style.color = 'var(--primary-focus)';
                replayPassword.style.borderColor = 'var(--primary-focus)';
                return false;
            }
            if (login.value.trim() == "") {
                labelLogin.style.color = 'var(--primary-focus)';
                login.style.borderColor = 'var(--primary-focus)';
                return false;
            }
            if (password.value == "") {
                labelPassword.style.color = 'var(--primary-focus)';
                password.style.borderColor = 'var(--primary-focus)';
                return false;
            }
            if (replayPassword.value == "") {
                labelReplayPassword.style.color = 'var(--primary-focus)';
                replayPassword.style.borderColor = 'var(--primary-focus)';
                return false;
            }
           
        }
       
        function cheeckedPassword() {
           
            let btn = document.querySelector("#btn-check-password");
            let img = document.querySelector("img.img-check-password");
            let input = document.querySelector("#password");

            if(check % 2 == 0 ) {
                img.src = "src/img/icon-eye.png";
                input.type = "text";
            }
            if (check % 2 > 0) {
                img.src = "src/img/icon-eye-close.png";
                input.type = "password";
            }
            check ++;
        }
        function cheeckedReplayPassword() {
           
           let btn = document.querySelector("#btn-check-password-replay");
           let img = document.querySelector("img.img-check-password-replay");
           let input = document.querySelector("#replay-password");

           if(check % 2 == 0 ) {
               img.src = "src/img/icon-eye.png";
               input.type = "text";
           }
           if (check % 2 > 0) {
               img.src = "src/img/icon-eye-close.png";
               input.type = "password";
           }
           check ++;
       }
    </script>
</body>

</html>

