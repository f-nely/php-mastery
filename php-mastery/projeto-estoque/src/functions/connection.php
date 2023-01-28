<?php

$conn = new PDO('mysql:dbname=controle_estoque;host=mysql', 'root', '<root-password>');

$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// var_dump($conn);

// insert
$sql = "INSERT INTO produtos(nome, descricao, sobre, preco, status, criado_em, atualizado_em)
VALUES('Produto via PHP', 'Descrição via PHP', 'Sobre via PHP', 255.96, 1, NOW(), NOW())";

var_dump($conn->query($sql));
exit;