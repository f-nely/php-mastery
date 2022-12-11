<?php

/*
    HEREDOC: Permite uma escrita com mais liberdade 
    e interpreta códigos dinâmicos no texto.
*/

$name = 'Nanderson';
$role = 'Developer';

echo <<<HEREDOC
Hey there! I'm $name, and work as a $role.
HEREDOC;