<?php

require_once ("conection.php");

$sqlUserAdd = "INSERT INTO User (login, password) VALUES 
            ('user1', '123'), 
            ('user2', '123'), 
            ('user2', '123')";
if($conn->query($sqlUserAdd)){
    echo "Данные о пользователях успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}
 
$sqlCategoryAdd = "INSERT INTO User (login, password) VALUES 
            ('Политика', 'Политические новости'), 
            ('Мемы', 'Смешные приколы'), 
            ('Спорт', 'Спортивные достижения, новинки'), 
            ('Технологии', 'Новейшее оборудование и достижения в IT индустрии'), 
            ('Красота', 'Советы по уходу, модные новинки'), ";
if($conn->query($sqlUserAdd)){
    echo "Данные о категориях успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}
$sqlPostAdd = "INSERT INTO Post (login, password) VALUES 
            ('«Барса» и «МЮ» устроили шоу уровня Лиги чемпионов. Сочная ничья на «Камп Ноу»', 'Первый матч стыкового раунда Лиги Европы впечатлил — 2:2. Для топ-клубов Лига Европы — это страшилка. Турнир, которого нужно избегать, чтобы болельщики команд-врагов не высмеивали тебя в соцсетях, а ты сам не терял время и силы. С точки зрения грандов призовые во втором по статусу турнире УЕФА ничтожны, а престижа — почти никакого. ', '01.01.2023', 3, 2), 
            ('ИСТОРИЯ СОЗДАНИЯ БРЕНДА ДЕКОРАТИВНОЙ КОСМЕТИКИ LAYLA COSMETICS', ' Эта невероятная история началась в далеком 1901 году в Италии.
Молодой итальянец Эмануэль Россетти сел в Риме на пароход, который следовал от берегов Италии до Соединенных Штатов Америки. Конечной целью Эмануэля был Нью-Йорк – самый большой на тот момент город в США, центр притяжения искателей приключений со всего мира.
В начале 20 века Италия была небогатой страной, особенно южные ее области, откуда родом был Эмануэль. Молодой человек был полон невероятных планов, но осуществить их в бедной провинции не представлялось возможным. Отличной идеей казалось наняться на пароход, чтобы заработать и посмотреть мир.', '27.04.2022', 5, 1), 
            ('Как наука изучает мемы? Рассказывает исследователь юмора', 'Моя девушка очень любит детей и работает няней. Как‑то раз я наткнулся на видео, где американские тинейджеры нашли в водоеме изопода, такое страшное создание, похожее на инопланетного жука. И девушка из видео начала с ним нянчиться, играть, будто это ее ребенок.', '10.02.2023', 2, 1), 
            ('Выбираем лучший профессиональный тональник', ' Какие проблемы с тональником у вас бывают – сушит и раздражает кожу, забивается в поры, подчеркивает морщинки, на лице похож на маску, быстро стирается, пачкает одежду? Возможно, все это сразу.
И что же делать? Не наносить? Но нам хочется иметь идеальный ровный тон лица и, заодно, защиту от непогоды и злого ультрафиолета. ', '16.02.2023', 5, 1), 
            ('Йоханнес Бе все ближе к абсолюту на чемпионате мира. Выиграл уже пять гонок из пяти', 'Норвежцу осталось закрыть две «мишени».
Чемпионат мира-2023 Новый день на чемпионате мира в немецком Оберхофе не принес сюрпризов. Очередную победу одержал Йоханнес Бе. На этот раз в сингл-миксте в паре с Марте Услбю-Ройселанд. Для Бе это пятая золотая медаль в пяти гонках. Ему осталось выиграть еще в двух, тогда ему покорится вечный рекорд. Вся сборная Норвегии готова работать на своего лидера.', '07.01.2023', 3, 3)";
if($conn->query($sqlUserAdd)){
    echo "Данные о постах успешно добавлены";
} else{
    echo "Ошибка: " . $conn->error;
}


$conn->close();