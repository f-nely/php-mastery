<?php

$users = [
    [
        'name' => 'User 1',
        'email' => 'user1@email.com',
        'address' => [
            'cep' => '63504-230'
        ]
    ],
    [
        'name' => 'User 2',
        'email' => 'user2@email.com',
        'address' => [
            'cep' => '69911-814'
        ]
    ],
];

echo $users[0]['name'] . ', email: ' . $users[0]['email'] . '<br>';
echo $users[1]['name'] . ', email: ' . $users[1]['email'] . '<br>';

echo '<hr>';

echo 'Endereço CEP: ' . $users[0]['address']['cep'] . '<br>';
echo 'Endereço CEP: ' . $users[1]['address']['cep'] . '<br>';

var_dump($users);