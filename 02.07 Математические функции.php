<?php

//Алгебра

exp
float exp ( float $arg )
/*Возвращает e в степени arg. Число e - основание натурального логарифма. Приблизительно равно 2.718282.*/


log
float log ( float $arg [, float $base = M_E ] )
/*log — Натуральный логарифм Если указан необязательный параметр base, log() возвращает
logbase от arg, иначе log() возвращает натуральный логарифм числа arg.*/


log10
float log10 ( float $arg )
/*Возвращает десятичный логарифм arg.*/



intdiv
int intdiv ( int $dividend , int $divisor )
/*Возвращает результат целочисленного деления делимого (divident) на делитель (divisor)*/



pi
float pi ( void )
/*Возвращает приближённое значение числа Пи с точностью,
определяемой директивой precision в php.ini, значение по
умолчанию которой 14.
Константа M_PI даёт идентичный результат.*/


pow
number pow ( number $base , number $exp )
/*Возвращает base, возведенное в степень exp.*/



sqrt
float sqrt ( float $arg )
/*Возвращает квадратный корень из arg.*/



//Тригонометрия

/*Тригонометрические функции*/
• float sin ( float $arg )
• float cos ( float $arg )
• float tan ( float $arg )
/*Параметр $arg задается в радианах*/




/*Тригонометрические arc-функции*/
• float arcsin ( float $arg )
• float arccos ( float $arg )
• float arctan ( float $arg )
/*Параметр $arg задается в радианах*/



hypot
float hypot ( float $x , float $y )
/*hypot() возвращает длину гипотенузы прямоугольного 
треугольника с длинами сторон x и y, или расстояние точки (x, y)
до начала координат.
Эквивалентно sqrt(x*x + y*y).*/








//Округление
floor
/*float floor ( float $value )
Возвращает ближайшее целое число, округляя value в меньшую
сторону.*/


round
/*float round ( float $val [, int $precision = 0 [, int $mode = PHP_ROUND_HALF_UP ]] )
Возвращает округлённое значение val с указанной точностью
precision (количество цифр после запятой). Последняя может быть
отрицательной или нулём (по умолчанию).*/



ceil
/*float ceil ( float $value )
Возвращает ближайшее большее целое от value.*/
