<?php
require_once('connection.php');

/*$sqlUserAdd = "INSERT INTO User (login, password) VALUES 
            ('user1', '123'), 
            ('user2', '123'), 
            ('user3', '123')";
if(mysqli_query($conn, $sqlUserAdd)){
    echo "Данные о пользователях успешно добавлены";
} else{
    echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
}*/
 
/*$sqlCategoryAdd = "INSERT INTO CategoryPost (name, description) VALUES 
            ('Политика', 'Политические новости'), 
            ('Мемы', 'Смешные приколы'), 
            ('Спорт', 'Спортивные достижения, новинки'), 
            ('Технологии', 'Новейшее оборудование индустрии'), 
            ('Красота', 'Советы по уходу, модные новинки')";
if(mysqli_query($conn, $sqlCategoryAdd)){
    echo "Данные о категориях успешно добавлены";
} else{
    echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
}*/
/*
$sqlPostAdd = "INSERT INTO Post (name, description, dateCreate, idCategory, idUser) VALUES 
            ('«Барса» и «МЮ» устроили шоу уровня Лиги чемпионов. Сочная ничья на «Камп Ноу»', 'Первый матч стыкового раунда Лиги Европы впечатлил — 2:2. ', '01.01.2023', 3, 11), 
            ('ИСТОРИЯ СОЗДАНИЯ БРЕНДА ДЕКОРАТИВНОЙ КОСМЕТИКИ LAYLA COSMETICS', ' Эта ткуда родом был Эмануэль. Молодой человек был полон невероятных планов, но осуществить их в бедной провинции не представлялось возможным.', '27.04.2022', 5, 10), 
            ('Как наука изучает мемы? Рассказывает исследователь юмора', 'Моя девушка очень любит детей и работает няней. Как‑то раз я наткнулся на видео, где американские тинейджеры нашли в водоеме изопода, такое страшное создание', '10.02.2023', 2, 10), 
            ('Выбираем лучший профессиональный тональник', ' Какие про и, заодно, защиту от непогоды и злого ультрафиолета. ', '16.02.2023', 5, 10), 
            ('Йоханнес Бе все ближе к абсолюту на чемпионате мира', 'Выиграл уже пять гонок из', '07.01.2023', 3, 12)";
if(mysqli_query($conn, $sqlPostAdd)) {
    echo "Данные о постах успешно добавлены";
} else{
    echo "Ошибка: " . $sql . "<br>" . mysqli_error($conn);
}
*/

mysqli_close($conn);
