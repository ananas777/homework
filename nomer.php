<?php
$inputData = '5а6667';
$regexp = '/[а-яёА-ЯЁ][а-яёА-ЯЁ][0-9][0-9][0-9][а-яёА-ЯЁ]/u';
if (preg_match($regexp, $inputData)) {
	echo "всё верно <br>";
} else {
	echo "Пожалуйста, проверьте номер  он должен иметь вид АА111А";
}
