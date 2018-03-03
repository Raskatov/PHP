<?php 


array_diff
array array_diff ( array $array1 , array $array2 [, array $... ] )
/*Сравнивает array1 с одним или несколькими другими массивами и
возвращает значения из array1, которые отсутствуют во всех других
массивах.*/
$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
Array( [1] => blue);



array_intersect
array array_intersect ( array $array1 , array $array2 [, array $... ] )
/*Функция array_intersect() возвращает массив, содержащий все
значения массива array1, которые содержатся во всех
аргументах. Обратите внимание, что ключи сохраняются.*/

