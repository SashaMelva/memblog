
let check = 0;

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

function validateFormUpdateProfil() {
    let login = document.querySelector("#login");
    let password = document.querySelector("#password");
    
    let replayPassword = document.querySelector("#replay-password");
    let labelLogin = document.querySelector("label.label-login");
    
    let labelPassword = document.querySelector("label.label-password");
    let labelReplayPassword = document.querySelector("label.label-replay-password");
    
  
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

function validationNewPost() {
    let namePost = document.querySelector("#namePost");
   // let namePost = document.querySelector();
   // let inp
}



function cheeckedPassword() {

    let btn = document.querySelector("#btn-check-password");
    let img = document.querySelector("img.img-check-password");
    let input = document.querySelector("#password");

    if (check % 2 == 0) {
        img.src = "../src/img/icon-eye.png";
        input.type = "text";
    }
    if (check % 2 > 0) {
        img.src = "../src/img/icon-eye-close.png";
        input.type = "password";
    }
    check++;
}
function cheeckedReplayPassword() {

    let btn = document.querySelector("#btn-check-password-replay");
    let img = document.querySelector("img.img-check-password-replay");
    let input = document.querySelector("#replay-password");

    if (check % 2 == 0) {
        img.src = "../src/img/icon-eye.png";
        input.type = "text";
    }
    if (check % 2 > 0) {
        img.src = "../src/img/icon-eye-close.png";
        input.type = "password";
    }
    check++;
}

function changeProfile() {
    let formChange = document.querySelector(".changed-profil");
    formChange.style.display = 'block';
    let formActual = document.querySelector(".actual-profil");
    formActual.style.display = 'none';
}
function actualProfil() {
    let formActual = document.querySelector(".actual-profil");
    formActual.style.display = 'block';
    let formChange = document.querySelector(".changed-profil");
    formChange.style.display = 'none';
}


let r = 0;
function categoryPost() {
    let formCategory = document.querySelector(".category-post");
    if (r % 2 == 0) {
        formCategory.style.display = 'none';
    }
    if (r % 2 > 0) {
        formCategory.style.display = 'flex';
    }
    r++;
}


function closeWinMessage() {
    let win = document.querySelector('.div-message');
    win.style.display = 'none';
}