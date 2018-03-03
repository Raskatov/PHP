<?php

copy
bool copy ( string $source , string $dest [, resource $context ] )
/*Копирует файл source в файл с
именем dest.*/


rename
bool rename ( string $oldname , string $newname [, resource $context ] )
/*Пытается переименовать oldname в newname,
перенося файл между директориями, если
необходимо. Если newname существует, то он
будет перезаписан.*/



mkdir
bool mkdir ( string $pathname [, int $mode = 0777 [, bool $recursive = false [, resource $context ]]] )
/*Пытается создать директорию,
заданную в pathname.
Аргумент mode игнорируется в
Windows.*/


rmdir
bool rmdir ( string $dirname [, resource $context ] )
/*Пытается удалить директорию с именем
dirname. Директория должна быть пустой и
должны иметься необходимые для этого права.
В случае ошибки будет сгенерирована ошибка
уровня E_WARNING.*/



touch
bool touch ( string $filename [, int $time = time() [, int $atime ]] )
/*Пытается установить время доступа и модификации файла с
именем filename в значение time. Обратите внимание, что время
доступа изменяется всегда, независимо от количества
аргументов.
Если файл не существует, он будет создан.*/



unlink
bool unlink ( string $filename [, resource $context ] )
/*Удаляет файл filename. В случае ошибки будет сгенерирована
ошибка уровня E_WARNING.*/
