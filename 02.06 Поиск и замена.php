<?php

strpos
mixed strpos ( string $haystack , mixed $needle [, int $offset = 0 ] )
int mb_strpos ( string $haystack , string $needle [, int $offset = 0 [, string $encoding = mb_internal_encoding() ]] )
/*Ищет позицию первого вхождения подстроки needle в строку haystack.
Если needle не является строкой, он приводится к целому и трактуется как код символа.
Если offset указан, то поиск будет начат с указанного количества
символов с начала строки. В отличии от strrpos() и strripos()
данный параметр не может быть отрицательным.*/




strrpos
int strrpos ( string $haystack , string $needle [, int $offset = 0 ] )
int mb_strrpos ( string $haystack , string $needle [, int $offset = 0 [, string $encoding = mb_internal_encoding() ]] )
/*Ищет позицию последнего вхождения подстроки needle в строку haystack.
Если указан offset, то поиск начнется с данного количества
символов с начала строки. Если передано отрицательное
значение, поиск начнется с указанного количества символов от
конца строки, но по прежнему будет производится поиск
последнего вхождения.*/





str_replace
mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int & $count ] )
/*Эта функция возвращает строку или массив, в котором все
вхождения search в subject заменены на replace.
Если search и replace - массивы, то str_replace() использует
каждое значение из соответствующего массива для поиска и
замены в subject. Если в массиве replace меньше элементов, чем
в search, в качестве строки замены для оставшихся значений
будет использована пустая строка. Если search - массив, а
replace - строка, то эта строка замены будет использована для
каждого элемента массива search.*/





strlen/mb_strlen
int strlen ( string $string )
mixed mb_strlen ( string $str [, string $encoding = mb_internal_encoding() ] )
/*Возвращает длину строки string.
mb_strlen() Возвращает FALSE, если передан недопустимый
параметр encoding.*/
