<?php

$user = [
    'name' => 'Nanderson Castro',
    'email' => 'nandokstro@gmail.com',
    'age' => 30,
    'height' => 1.70,
    'brazilian' => true,
];

foreach ($user as $key => $value) {
    echo "{$key}: {$value} <br>";
}