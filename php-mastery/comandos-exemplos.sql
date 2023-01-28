-- create database
CREATE DATABASE controle_estoque collate utf8mb4_unicode_ci;

-- create first table
CREATE TABLE produtos(
    id INT(11) PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255) NOT NULL,
    descricao VARCHAR(255) NULL,
    sobre LONGTEXT,
    preco FLOAT(10, 2),
    status TINYINT(1),
    criado_em DATETIME,
    atualizado_em DATETIME
)engine=innoDB;

-- insert data
INSERT INTO produtos(nome, descricao, sobre, preco, status, criado_em, atualizado_em) 
VALUES('Produto Exemplo', 'Descricao exemplo', 'Sobre o produto', 29.9, 1, NOW(), NOW());