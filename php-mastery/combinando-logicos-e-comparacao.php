<?php

$name = 'Nanderson';
$email = '';

// Validar todos os campos
var_dump($name == '' || $email == '');
echo $name == '' || $email = '';
echo '<hr>';

// Se o usuário tem a idade esperada pelo sistema
$age = 30;
$ageUser = 20;
echo !($age == $ageUser);
