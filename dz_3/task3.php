<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Смирнова Христина Потаповна' => 4,
        'Рогозин Даниил Арсениевич' => 5,
        'Золин Владилен Леонтиевич' => 2,
        'Архаткина Владислава Никитевна' => 4,
        'Мещерякова Мария Елизаровна' => 2,
        'Саврасова Фаина Ивановна' => 5,
        'Хромченко Зинаида Николаевна' => 4,
        'Протасова Майя Леонидовна' => 3,
   
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Ябров Тимур Чеславович' => 2,
        'Белорусов Ефрем Изяславович' => 5,
        'Ягода Назар Прохорович' => 4,
        'Ярилова Розалия Серафимовна' => 4,
        'Нырко Платон Вадимович' => 4,
        'Калинин Агап Моисеевич' => 3,
        'Никифоров Юлиан Прокофиевич' => 2,
    ]
 ];

$listOut = [];

 foreach($students as $groupe => $classMates) {
    $sumValue = 0;
    foreach($classMates as $student => $value) {
        $sumValue += $value;
        if($value <= 3) {
           $listOut[$groupe][]= $student;
        }
    }
    $averageValue = $sumValue / count($classMates);
    echo "В группе $groupe средняя оценка $averageValue \n";
    
 }
 print_r($listOut);