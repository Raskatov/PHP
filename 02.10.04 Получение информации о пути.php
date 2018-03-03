<?php 

pathinfo
mixed pathinfo ( string $path [, int $options = PATHINFO_DIRNAME | PATHINFO_BASENAME | PATHINFO_EXTENSION | PATHINFO_FILENAME ] )
/* pathinfo() возвращает информацию о path в виде
ассоциативного массива или строки в зависимости от options.
Если указан options, то он задает для возврата отдельный
элемент: один из следующих PATHINFO_DIRNAME,
PATHINFO_BASENAME, PATHINFO_EXTENSION и PATHINFO_FILENAME.*/


file_exists
bool file_exists ( string $filename )
/*Проверяет наличие указанного файла или каталога.*/


is_file
bool is_file ( string $filename )
/*Определяет, является ли файл обычным файлом.*/


is_dir
bool is_dir ( string $filename )
/*Определяет, является ли имя файла директорией.*/
