<?php

$num = 20;

echo $num == 10 ? 'Sim, é igual a 10!' : 'Não é igual a 10!';

echo '<br>';

$value = $num == 20 ? 'O valor recebido é 20' : 'O valor não é 20';

echo $value;

echo '<br>';

$amount = 30;

$amountReceived = $amount ?: -1;

echo $amountReceived;