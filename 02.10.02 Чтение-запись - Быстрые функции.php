<?php

file_get_contents
string file_get_contents ( string $filename [, bool $use_include_path = false [, resource $context [, int $offset = -1 [, int $maxlen ]]]] );
/*Читает содержимое файла (или URL) в строку*/


file_put_contents
int file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] )
/*Функция идентична последовательным успешным вызовам
функций fopen(), fwrite() и fclose().*/
