/*CREATE DATABASE blog_db;

CREATE TABLE User 
(
    id INT PRIMARY KEY AUTO_INCREMENT, 
    login VARCHAR(20), 
    password VARCHAR(20)
);

CREATE TABLE CategoryPost 
(
    idCategory INT PRIMARY KEY AUTO_INCREMENT, 
    name VARCHAR(100), 
    description VARCHAR(255)
);

CREATE TABLE Post 
(
    idPost INT PRIMARY KEY AUTO_INCREMENT NOT NULL, 
    PostName VARCHAR(100) NOT NULL, 
    description VARCHAR(255), 
    dateCreate DATETIME NOT NULL,
    idCategory INT NOT NULL,
    idUser INT NOT NULL
);

ALTER TABLE Post ADD FOREIGN KEY (idCategory) REFERENCES CategoryPost (idCategory);
ALTER TABLE Post ADD FOREIGN KEY (idUser) REFERENCES User (id);*/

