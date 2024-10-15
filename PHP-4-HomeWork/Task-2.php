<?php

function mathOperation($arg1, $arg2, $operation) {
    switch ($operation) {
        case '+':
            return $arg1 + $arg2;
        case '-':
            return $arg1 - $arg2;
        case '*':
            return $arg1 * $arg2;
        case '/':
            if ($arg2 != 0) {
                return $arg1 / $arg2;
            } else {
                return "Делить на 0 нельзя";
            }
        default:
            return "нет такой операции";
    }
}
echo mathOperation(654, 3, '+');  
echo mathOperation(432, 3, '-'); 
echo mathOperation(2324, 3, '*'); 
echo mathOperation(12, 2, '/'); 
echo mathOperation(1231, 0, '/'); 
echo mathOperation(754, 2, '*'); 