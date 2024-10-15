<?php

function pow($val, $pow) {
    if ($pow == 0) {
        return 1;
    } elseif ($pow > 0) {
        return $val * pow($val, $pow - 1);
    } else {
        return 1 / pow($val, -$pow);
    }
}

 
echo pow(6, -2);   