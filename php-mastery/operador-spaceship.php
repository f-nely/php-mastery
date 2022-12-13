<?php

$num1 = 2;
$num2 = 1;

var_dump($num1 <=> $num2); // 1
var_dump($num2 <=> $num1); // -1
var_dump($num2 <=> $num2); // 0