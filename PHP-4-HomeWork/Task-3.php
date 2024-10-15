<?php

$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Касимов', 'Рыбное'],
 
];

foreach ($regions as $region => $cities) {
    echo "$region: " . implode(', ', $cities) . "<br>";
}

?>