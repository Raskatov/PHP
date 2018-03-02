<?php

//Время
time
int time ( void )
/*Возвращает количество секунд, прошедших с начала Эпохи Unix
(The Unix Epoch, 1 января 1970 00:00:00 GMT) до текущего
времени.*/



strtotime
int strtotime ( string $time [, int $now = time() ] )
/*Первым параметром функции должна быть строка с датой на
английском языке, которая будет преобразована в метку
времени Unix (количество секунд, прошедших с 1 января 1970 г.
00:00:00 UTC) относительно метки времени, переданной в now,
или текущего времени, если аргумент now опущен.*/



//Дата
date
string date ( string $format [, int $timestamp = time() ] )
/*Возвращает строку, отформатированную в соответствии с
указанным шаблоном format. Используется метка времени,
заданная аргументом timestamp, или текущее системное время,
если timestamp не задан. Таким образом, timestamp является
необязательным и по умолчанию равен значению,
возвращаемому функцией time().
Все символы для формата смотрим тут: http://php.net/manual/
ru/function.date.php*/



//Солнце
date_sunrise
mixed date_sunrise ( int $timestamp [, int $format
    = SUNFUNCS_RET_STRING [, float $latitude =
    ini_get("date.default_latitude") [, float $longitude
    = ini_get("date.default_longitude") [, float $zenith
    = ini_get("date.sunrise_zenith") [, float
$gmt_offset = 0 ]]]]] )
/*Пример:*/
echo date("D M d Y"). ', время восхода солнца : ' .date_sunrise(time(), SUNFUNCS_RET_STRING, 38.4, -9, 90, 1);


date_sunset
mixed date_sunset ( int $timestamp [, int $format =
    SUNFUNCS_RET_STRING [, float $latitude =
    ini_get("date.default_latitude") [, float $longitude =
    ini_get("date.default_longitude") [, float $zenith =
    ini_get("date.sunset_zenith") [, float $gmt_offset = 0 ]]]]] )
/*Пример:*/
echo date("D M d Y"). ', время захода солнца :
' .date_sunset(time(), SUNFUNCS_RET_STRING, 38.4,
        -9, 90, 1);
