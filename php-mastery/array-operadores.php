<?php

$listFruitOne = ['apple'];

$listFruitTwo = [
    1 => 'orange', 
    2 => 'banana', 
    3 => 'grape',
];

// Somar dois arrays com o operador +
$listFruit = $listFruitOne + $listFruitTwo;

echo '<pre>';
print_r($listFruit);
echo '</pre>';

// Comparando arrays
var_dump($listFruitOne == $listFruitTwo);

