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

echo '<pre>';
for ($i = 0; $i < count($users); $i++) {
    print_r($users[$i]);
}
echo '</pre>';

$message = '';
foreach ($users as $user) {
    // var_dump($user);
    $message .= $user['name']; 
    $message .= ', tem o e-mail ' . $user['email']; $message .= '. Possui o CEP.: ' . $user['address']['cep'];
    $message .= '<hr>';
}
echo $message;