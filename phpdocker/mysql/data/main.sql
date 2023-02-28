/*CREATE DATABASE blog_db;*/

CREATE TABLE User 
(
    id INT PRIMARY KEY AUTO_INCREMENT, 
    login VARCHAR(20), 
    password VARCHAR(20)
);

/*CREATE TABLE CategoryPost 
(
    idCategory INT PRIMARY KEY AUTO_INCREMENT, 
    name VARCHAR(100), 
    description VARCHAR(255)
);*/

CREATE TABLE Post 
(
    idPost INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    PostName VARCHAR(100) NOT NULL, 
    description VARCHAR(255), 
    dateCreate DATETIME NOT NULL,
    /*idCategory INT NOT NULL,*/
    idUser INT NOT NULL
);
/*ALTER TABLE Post ADD FOREIGN KEY (idCategory) REFERENCES CategoryPost (idCategory);*/
ALTER TABLE Post ADD FOREIGN KEY (idUser) REFERENCES User (id);



INSERT INTO User (login, password) VALUES 
            ('user1', '123'), 
            ('user2', '123'), 
            ('user3', '123');

INSERT INTO Post (PostName , description, dateCreate, /*idCategory,*/ idUser) VALUES 
            ('«Барса» и «МЮ» устроили шоу уровня Лиги чемпионов. Сочная ничья на «Камп Ноу»', 'Первый матч стыкового раунда Лиги Европы впечатлил — 2:2. ', '01.01.2023',1), 
            ('ИСТОРИЯ СОЗДАНИЯ БРЕНДА ДЕКОРАТИВНОЙ КОСМЕТИКИ LAYLA COSMETICS', ' Эта ткуда родом был Эмануэль. Молодой человек был полон невероятных планов, но осуществить их в бедной провинции не представлялось возможным.', '27.04.2022', 2), 
            ('Как наука изучает мемы? Рассказывает исследователь юмора', 'Моя девушка очень любит детей и работает няней. Как‑то раз я наткнулся на видео, где американские тинейджеры нашли в водоеме изопода, такое страшное создание', '10.02.2023',2), 
            ('Выбираем лучший профессиональный тональник', ' Какие про и, заодно, защиту от непогоды и злого ультрафиолета. ', '16.02.2023',1), 
            ('Йоханнес Бе все ближе к абсолюту на чемпионате мира', 'Выиграл уже пять гонок из', '07.01.2023', 3);

