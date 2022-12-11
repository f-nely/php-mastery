<?php

// Conta os caracteres
echo strlen(str_replace(' ', '', 'Testando strings'));
echo '<br>';

// Pegar parte da string
// Pegar a partir da posição 0, 7 caracteres
echo substr('Testando strings', 0, 7);
echo '<br>';

echo substr('Testando strings', -4, 2);
echo '<br>';

echo substr('Testando strings', 7);
echo '<br>';

echo substr('Testando strings', -7);
echo '<br>';

// Adicionar caracteres extras
echo str_pad('Teste', 8, '*', STR_PAD_LEFT);
echo '<br>';

// Maiúsculo e minúsculo
echo strtoupper('php');
echo '<br>';
echo strtolower('PHP');
echo '<br>';

// Encontrar uma ocorrência de caracterer
echo strstr('image.jpeg', '.');
echo '<br>';
echo strchr('image.png', '.');
echo '<br>';

// Substituir caracteres
echo str_replace('Java', 'PHP', 'Learning Java');