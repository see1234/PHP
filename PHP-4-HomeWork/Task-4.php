<?php

function translit(string $text): string
{
 
    $translatium = [
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'e', 'ё' => 'yo', 'ж' => 'zh',
        'з' => 'z', 'и' => 'i', 'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o',
        'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't', 'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'ts',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '\'', 'ы' => 'i', 'ь' => '\'', 'э' => 'e', 'ю' => 'yu',
        'я' => 'ya',
        'А' => 'A', 'Б' => 'B', 'В' => 'V', 'Г' => 'G', 'Д' => 'D', 'Е' => 'E', 'Ё' => 'Yo', 'Ж' => 'Zh',
        'З' => 'Z', 'И' => 'I', 'Й' => 'Y', 'К' => 'K', 'Л' => 'L', 'М' => 'M', 'Н' => 'N', 'О' => 'O',
        'П' => 'P', 'Р' => 'R', 'С' => 'S', 'Т' => 'T', 'У' => 'U', 'Ф' => 'F', 'Х' => 'H', 'Ц' => 'Ts',
        'Ч' => 'Ch', 'Ш' => 'Sh', 'Щ' => 'Sch', 'Ъ' => '\'', 'Ы' => 'I', 'Ь' => '\'', 'Э' => 'E', 'Ю' => 'Yu',
        'Я' => 'Ya'
    ];
    $specialChars = ['.', ',', '!', '?', ':', ';', ' '];
    $result = '';
    foreach (preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY) as $char) {
        if (isset($translatium[$char])) {
            if (strtoupper($char) === $char) {
                $result .= strtoupper($translatium[$char]);
            } else {
                $result .= $translatium[$char];
            }
        } elseif (in_array($char, $specialChars)) {
            $result .= $char;
        } else {
            continue;
        }
    }
    return $result;
}


echo translit('тесттт!'); 


?>