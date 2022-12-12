<?php

$num1 = '30';
$num2 = 20;

// Igualdade: == ou ===
var_dump($num1 == $num2); // Compara só o valor
var_dump($num1 === $num2); // Compara valor e o tipo

$num1 = 20;

// Operadores de diferença
var_dump($num1 != $num2);
var_dump($num1 <> $num2);

// Operador de não identico: tipo e valor
var_dump($num1 !== $num2);

$num1 = 10;
$num2 = 10;

// Maior ou igual
var_dump($num1 > $num2);
var_dump($num1 >= $num2);

// Menor ou igual
$num1 = 10;
$num2 = 30;

var_dump($num1 < $num2);