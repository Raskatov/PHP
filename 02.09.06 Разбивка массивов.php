<?php 

array_chunk
array array_chunk ( array $array , int $size [, bool $preserve_keys = false ] )
/*Разбивает массив на несколько массивов размером в size
элементов. Последний массив из полученных может содержать
меньшее количество значений, чем указано в size.
Если size меньше 1, будет сгенерирована ошибка уровня
E_WARNING и возвращен NULL.*/
