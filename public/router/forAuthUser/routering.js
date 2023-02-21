
let content = document.querySelector("#app-auth-user");
let action = "";

async function defaultPage() {
    action = "main"
    return await createRequest("../../views/main.php");
}

async function setActionValue(event) {
    event.preventDefault();

    switch (event.target.id) {
        case "profil":
            action = event.target.id;
            document.title = "Профиль";
            await createRequest("../../views/profil.php");
            break;
        case "new-post":
            action = event.target.id;
            document.title = "Новый пост";
            await createRequest("../../views/new_post.php");
            break;
        case "main":
            action = event.target.id;
            document.title = "Главная";
            await createRequest("../../views/main.php");
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
                "Auth-Content": "application/json;charset=utf-8"
            },

            body: JSON.stringify({ "action": action })
        });
        return content.innerHTML = await request.text();
    }
    catch (e) {
        console.log(e);
    }
}


