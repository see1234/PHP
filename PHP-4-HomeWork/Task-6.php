<?php

function getCurrentTimeWithDeclensions() {
    $hour = date('G');
    $minute = date('i');

    $hourDeclension = declension($hour, ['час', 'часа', 'часов']);
    $minuteDeclension = declension($minute, ['минута', 'минуты', 'минут']);

    return "$hour $hourDeclension $minute $minuteDeclension";
}

function declension($number, $forms) {
    $number = abs($number) % 100;
    if ($number >= 11 && $number <= 19) {
        return $forms[2];
    }
    $number %= 10;
    if ($number >= 2 && $number <= 4) {
        return $forms[1];
    }
    if ($number == 1) {
        return $forms[0];
    }
    return $forms[2];
}

echo getCurrentTimeWithDeclensions(); 

?>

