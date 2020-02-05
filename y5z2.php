<?php
error_reporting(-1)

$text = "лмоомл";
$result = 'палиндром';

$text = mb_strtolower($text);     //нижний регистр
$text = str_replace(" ", "", $text);  //убрали пробелы   

$lenght = mb_strlen($text);
$halfLenght = floor($lenght/ 2);

for ($i = 0; $i <= $halfLenght; $i++){
  $halfLenght == $halfLenght    
if ()

}

echo "Результат: {$result}<br>"