trim
string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )
/*Эта функция возвращает строку str с удаленными из начала и конца строки пробелами. Если второй параметр не передан,
trim() удаляет следующие символы:
" " (ASCII 32 (0x20)), обычный пробел.
"\t" (ASCII 9 (0x09)), символ табуляции.
"\n" (ASCII 10 (0x0A)), символ перевода строки.
"\r" (ASCII 13 (0x0D)), символ возврата каретки.
"\0" (ASCII 0 (0x00)), NUL-байт.
"\x0B" (ASCII 11 (0x0B)), вертикальная табуляция.*/


rtrim
string rtrim ( string $str [, string $character_mask ] )
/*Эта функция возвращает строку str с удаленными из конца строки пробелами.*/



ltrim
string ltrim ( string $str [, string $character_mask ] )
/*Удаляет пробелы (или другие символы) из начала строки.*/


nl2br
string nl2br ( string $string [, bool $is_xhtml = true ] )
/*Возвращает строку string, в которой перед каждым переводом строки (\r\n, \n\r, \n и \r) вставлен '<br />' или '<br>'.*/
