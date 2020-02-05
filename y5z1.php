<?php
 
error_reporting(-1);

$letters = array(
    'ко',   'и',    'дзу',  'ми',
    'са',   'ку',   'ра',   'да',
    'чи',   'а',    'ки',   'ми',
    'на',   'го',   'ха',   'ру'
);
 
/* В эту переменную запишем получившееся имя */
$name = ' ';
 
/* Гененрируем 4 слога */
for ($i = 1; $i <= 4; $i++) {   
    /* Выкидываем случайное число (count - число элементов в массиве) */
    $random = mt_rand(0,count($letters)-1); 
    $randomText = $letters[$random];
    $slogi[]= $randomText;
    echo "Выпало число {$random}, слог {$randomText}<br>";
    
}
 $name = implode("", $slogi);
echo "------<br>";
echo "Советую имя: {$name} - не прогадаешь!<br>";