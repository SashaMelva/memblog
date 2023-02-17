
let content = document.querySelector("#app");
let action = "";

async function defaultPage() {
    return await createRequest("../views/main.php");
}

async function setActionValue(event) {
    event.preventDefault();

    switch (event.target.id) {
        case "authorization":
            action = event.target.id;
            document.title = "Авторизация";
            await createRequest("../views/authorization.php");
            break;
        case "main":
            action = event.target.id;
            document.title = "Блог";
            await createRequest("../views/main.php");
            break;
        case "registration":
            action = event.target.id;
            document.title = "Регистрация";
            await createRequest("../views/registration.php");
            break;


    }
}







//Асинхронный ajax запрос по какому-либо файлу
async function createRequest(url) {

    try {
        //Запрос в который передаём url и объект
        const request = await fetch(url, {
            method: "POST",
            headers: {
                "Main-Content": "application/json;charset=utf-8"
            },

            body: JSON.stringify({ "action": action })
        });
        return content.innerHTML = await request.text();
    }
    catch (e) {
        console.log(e);
    }
}


