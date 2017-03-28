CREATE DATABASE  `royalty`;

CREATE USER 'sisroyalty'@'localhost' identified by '123456';
GRANT ALL PRIVILEGES ON royalty.* TO 'sisroyalty'@'localhost';

USE royalty;

CREATE TABLE produtos
(
id INT NOT NULL UNIQUE,
nome VARCHAR(45) NOT NULL,
descricao VARCHAR(255),
imagem VARCHAR(255),
preco DOUBLE NOT NULL,
categoria VARCHAR(45),
created_at TIMESTAMP,
updated_at TIMESTAMP,
PRIMARY KEY (id)
);

CREATE TABLE users
(
id INT NOT NULL UNIQUE,
nome VARCHAR(191) NOT NULL,
email VARCHAR(191) NOT NULL,
telefone VARCHAR(15),
tipo INT,
login VARCHAR(45) NOT NULL,
senha VARCHAR(191) NOT NULL,
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

insert into users values(1,'Admin','admin@admin.com',"000000000000000",2,'admin', 'admin',"", NOW(), NOW());

insert into users values(2,'Gui','gui@admin.com',"999999999999999",1,'gui', '123',"", NOW(), NOW());

insert into users values(3,'Operador','op@admin.com',"999999999999991",3,'operador', 'operador',"", NOW(), NOW());

