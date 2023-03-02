USE blog_db;

CREATE TABLE users 
(
    user_id INT PRIMARY KEY AUTO_INCREMENT, 
    login VARCHAR(20), 
    password VARCHAR(20)
);

CREATE TABLE categories_posts 
(
    category_id INT PRIMARY KEY AUTO_INCREMENT, 
    category_name VARCHAR(100), 
    category_description VARCHAR(255)
);

CREATE TABLE posts 
(
    post_id INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    post_name VARCHAR(255) NOT NULL, 
    post_description TEXT, 
    post_create_date DATETIME NOT NULL,
    post_category_id INT NOT NULL,
    post_user_id INT NOT NULL
);
ALTER TABLE posts ADD FOREIGN KEY (post_category_id) REFERENCES categories_posts (category_id);
ALTER TABLE posts ADD FOREIGN KEY (post_user_id) REFERENCES users (user_id);

/*
ALTER DATABASE blog_db CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
ALTER TABLE users CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
ALTER TABLE categories_posts CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
ALTER TABLE posts CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

INSERT INTO users (login, password) VALUES 
            ('user1', '123'), 
            ('user2', '123'), 
            ('user3', '123');

INSERT INTO categories_posts  (category_name, category_description) VALUES 
            ('Политика', 'Политические новости'), 
            ('Мемы', 'Смешные приколы'), 
            ('Спорт', 'Спортивные достижения, новинки'), 
            ('Технологии', 'Новейшее оборудование индустрии'), 
            ('Красота', 'Советы по уходу, модные новинки');

INSERT INTO posts (post_name , post_description, post_create_date, post_category_id, post_user_id) VALUES 
            ('«Барса» и «МЮ» устроили шоу уровня Лиги чемпионов. Сочная ничья на «Камп Ноу»', 'Первый матч стыкового раунда Лиги Европы впечатлил — 2:2. ', '01.01.2023',3,1), 
            ('ИСТОРИЯ СОЗДАНИЯ БРЕНДА ДЕКОРАТИВНОЙ КОСМЕТИКИ LAYLA COSMETICS', ' Эта ткуда родом был Эмануэль. Молодой человек был полон невероятных планов, но осуществить их в бедной провинции не представлялось возможным.', '27.04.2022',5, 2), 
            ('Как наука изучает мемы? Рассказывает исследователь юмора', 'Моя девушка очень любит детей и работает няней. Как‑то раз я наткнулся на видео, где американские тинейджеры нашли в водоеме изопода, такое страшное создание', '10.02.2023',2,2), 
            ('Выбираем лучший профессиональный тональник', ' Какие про и, заодно, защиту от непогоды и злого ультрафиолета. ', '16.02.2023',4,1), 
            ('Йоханнес Бе все ближе к абсолюту на чемпионате мира', 'Выиграл уже пять гонок из', '07.01.2023', 3,3);

*/