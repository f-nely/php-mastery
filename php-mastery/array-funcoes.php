<?php

$listFruit = ['maça', 'goiaba', 'uva'];

// Contar o tamanho do array
echo count($listFruit);
echo '<br>';
echo sizeof($listFruit);
echo '<br>';

// Verificar se o array tem um elemento
$fruitInArray = in_array('goiaba', $listFruit);
echo $fruitInArray ? 'Sim, está na cesta de fruta.' : 'Não está na cesta!';
echo '<br>';

// Adicionar items a um array existente
$carrinho = ['Item: Mouse'];
echo '<pre>';
print_r($carrinho);
array_push($carrinho, 'Item: Teclado');
print_r($carrinho);
echo '</pre>';
echo '<br>';

// Somar itens de um array
$precos = [19.99, 20.99, 2.99, 10, 0.50];
echo 'Resultado da soma é: ' . array_sum($precos);