<?php

fgetcsv
array fgetcsv ( resource $handle [, int $length = 0 [, string $delimiter = "," [, string $enclosure = '"' [, string $escape = "\" ]]]] );
/*Данная функция похожа на функцию fgets(), с той разницей, что
она производит анализ строки на наличие записей в формате
CSV и возвращает найденные поля в качестве массива.*/


fputcsv
int fputcsv ( resource $handle , array $fields [, string $delimiter = "," [, string $enclosure = '"' [, string $escape_char = "\" ]]] );
/*fputcsv() форматирует строку (переданную в виде массива
fields) в виде CSV и записывает её (заканчивая переводом
строки) в указанный файл handle.*/
