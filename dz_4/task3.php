<?php

$box = [
    [
        0 => 'Тетрадь',
        1 => 'Книга',
        2 => 'Настольная игра',
        3 => [
            'Настольная игра',
            'Настольная игра',
        ],
        4 => [
            [
                'Ноутбук',
                'Зарядное устройство'
            ],
            [
                'Компьютерная мышь',
                'Набор проводов',
                [
                    'Фотография',
                    'Картина'
                ]
            ],
            [
                'Инструкция',
                [
                    'Ключ'
                ]
            ]
        ]
    ],
    [
        0 => 'Пакет кошачьего корма',
        1 => [
            'Музыкальный плеер',
            'Книга'
        ]
    ]
 ];



 function recursiveSearch(array $arr, string $str)
 {
    $result = false;

    foreach($arr as $key => $elem)
    {
        if(is_array($arr[$key]))
        {
            recursiveSearch($arr[$key], $str);
          
        } 
        if($elem === $str)
        {
        $result = true;
        } 
            
    }
    return $result;
 };

 $show = recursiveSearch($box, 'Тетрадь');
 var_dump($show);
 print($show);

 // не работает. Пока не победил=)