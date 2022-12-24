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

$str = readline("Введите, пожалуйста, слово\n");
 function recursiveSearch(array $arr, string $str):bool
 {
      foreach($arr as $elem)
    {
        if(is_array($elem))
        {
           if(recursiveSearch($elem, $str))
           return true;         
        } 
        if($elem === $str)
        return true;
            
    }
    return false;
 };

 echo recursiveSearch($box, $str) ? 'true' : 'false';
 
 