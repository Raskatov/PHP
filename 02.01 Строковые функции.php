<?php 

//Преобразование строк

substr/mb_substr
string substr ( string $string , int $start [, int $length ] )
string mb_substr ( string $str , int $start [, int $length = NULL [, string $encoding = mb_internal_encoding() ]] )
/*Если start неотрицателен, возвращаемая подстрока начинается с позиции start от начала строки, считая от нуля. Например, в
строке 'abcdef', в позиции 0 находится символ 'a', в позиции 2 - символ 'c', и т.д.
Если start отрицательный, возвращаемая подстрока начинается с позиции, отстоящей на start символов от конца строки string.*/



str_pad
string str_pad ( string $input , int $pad_length [, string $pad_string = " " [, int $pad_type = STR_PAD_RIGHT ]] )
/*Эта функция возвращает строку input, дополненную слева, справа или с обоих сторон до заданной длины. Если
необязательный аргумент pad_string не передан, то input будет дополнен пробелами, иначе он будет дополнен символами из
pad_string до нужной длины*/



str_repeat
string str_repeat ( string $input , int $multiplier )
/*Возвращает строку input, повторенную multiplier раз.
multiplier должен быть больше или равен нулю. Если он равен
нулю, возвращается пустая строка.*/



str_shuffle
string str_shuffle ( string $str )
/*str_shuffle() перемешивает символы в строке. Выбирается одна
возможная перестановка из всех возможных.*/


strrev
string strrev ( string $string )
/*Возвращает строку string, перевернутую задом наперед.*/
