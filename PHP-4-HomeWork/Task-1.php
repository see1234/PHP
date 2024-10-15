<?php

function add($arg1, $arg2) {
    return $arg1 + $arg2;
}

function subtract($arg1, $arg2) {
    return $arg1 - $arg2;
}

function multiply($arg1, $arg2) {
    return $arg1 * $arg2;
}

function divide($arg1, $arg2) {
    if ($arg2 != 0) {
        return $arg1 / $arg2;
    } else {
        return "Error: Division by zero ";
    }
}

// Пример использования функций
//echo add(5, 3);  // Выведет 8
//echo subtract(5, 3);  // Выведет 2
echo multiply(5, 3);  // Выведет 15
//echo divide(6, 2);  // Выведет 3
//echo divide(6, 0);  // Выведет "Error: Division by zero"

