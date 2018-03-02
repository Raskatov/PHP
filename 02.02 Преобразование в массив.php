<?php

explode
array explode ( string $delimiter , string $string [, int $limit ] )
/*Возвращает массив строк, полученных разбиением строки string с использованием delimiter в качестве разделителя. Если аргумент limit является
положительным, возвращаемый массив будет содержать максимум limit элементов, при этом последний элемент будет содержать остаток строки string.*/


implode
string implode ( string $glue , array $pieces )
string implode ( array $pieces )
/*Объединяет элементы массива с помощью строки glue.*/


str_split
array str_split ( string $string [, int $split_length = 1 ] )
/*Преобразует строку в массив. Если указан необязательный аргумент split_length, возвращаемый массив будет содержать части исходной строки
длиной split_length каждая, иначе каждый элемент будет содержать один символ. Если split_length меньше 1, возвращается FALSE. Если split_length
больше длины строки string, то вся строка будет возвращена в первом и единственном элементе массива.*/
