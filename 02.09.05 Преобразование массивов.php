<?php 

array_flip
array array_flip ( array $array )
/*Функция array_flip() возвращает array наоборот, то есть ключи
массива array становятся значениями, а значения массива array
    становятся ключами.
Обратите внимание, что значения массива array должны быть
корректными ключами, то есть они должны иметь тип integer или
string. Если значение имеет неверный тип, будет выдано
предупреждение и данная пара ключ/значение не будет
включена в результат.*/



array_keys
array array_keys ( array $array [, mixed $search_value [, bool $strict = false ]] )
/*Функция array_keys() возвращает числовые и строковые ключи,
содержащиеся в массиве array.
Если указан необязательный параметр search_value, функция
возвращает только ключи, совпадающие с этим параметром. В
обратном случае, функция возвращает все ключи массива array.*/
