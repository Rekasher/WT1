<?php

$Number = $_GET['Number'];
$sum = 0;
for ($i = 0; $i < strlen($Number); $i++) {
    $sum += $Number[$i];
}
echo "Число: {$Number}\n";
echo "Сумма: {$sum}";
