CREATE DATABASE  `petshop`;

CREATE USER 'sispetshop'@'localhost' identified by '123456';
GRANT ALL PRIVILEGES ON petshop.* TO 'sispetshop'@'localhost';

USE petshop;

CREATE TABLE produtos
(
id INT NOT NULL UNIQUE,
nome VARCHAR(45) NOT NULL,
preco double NOT NULL,
imagem VARCHAR(255),
created_at TIMESTAMP,
updated_at TIMESTAMP,
PRIMARY KEY (id)
);

CREATE TABLE users
(
id INT NOT NULL UNIQUE,
nome VARCHAR(191) NOT NULL,
email VARCHAR(191) NOT NULL,
senha VARCHAR(191) NOT NULL,
tipo INT NOT NULL,
remember_token VARCHAR(100),
created_at TIMESTAMP,
updated_at TIMESTAMP,
PRIMARY KEY (id)
);

CREATE TABLE compras
(
id INT NOT NULL UNIQUE,
user_id INT NOT NULL,
produto_id INT NOT NULL,
quantidade INT,
datacompra DATETIME,
situacao INT,
created_at TIMESTAMP,
updated_at TIMESTAMP,
PRIMARY KEY (id),
FOREIGN KEY(user_id) REFERENCES users(id),
FOREIGN KEY(produto_id) REFERENCES produtos(id)
);

insert into users values(1,'admin','admin@admin.com','admin',2,"", NOW(), NOW());

insert into users values(2,'gui','gui@gmail.com','123',1,"", NOW(), NOW());






insert into users values(3,'operador','operador@gmail.com','operador',3,"", NOW(), NOW());