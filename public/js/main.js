
let check = 0;
function passwordChecked() {
    let btn = document.querySelector('button.btn-chk-password');
    let img = document.querySelector('img.password-img-btn');
    let input = document.querySelector('input.input-password');

    if (check % 2 == 0) {
        btn.className = "btn-chk-password btn-chk-password-open";
        img.src = "{{ Vite::asset('resources/images/abstract-1151.png')}}";
        input.type = "text";
    }
    if (check % 2 > 0) {
        btn.className = "btn-chk-password btn-chk-password-close";
        img.src = "{{ Vite::asset('resources/images/abstract-1152.png')}}";
        input.type = "password";
    }
    check++;
}
