<?php 

fopen
resource fopen ( string $filename , string $mode [, bool $use_include_path = false [, resource $context ]] )
/*Открывает файл в режиме mode, и возвращает указатель на открытый файл.
Режимы:
'r' - Открывает файл только для чтения; помещает указатель в
начало файла.
'w' - Открывает файл только для записи; помещает указатель в
начало файла и обрезает файл до нулевой длины. Если файл не
существует - пробует его создать.
Подробнее: http://php.net/manual/ru/function.fopen.php */




//Чтение из файла
fread
string fread ( resource $handle , int $length );
// fread() читает до length байт из файлового указателя handle.
// получает содержимое файла в строку
$filename = "/usr/local/something.txt";
$handle = fopen($filename, "r");
$contents = fread($handle, filesize($filename));
fclose($handle);


//Чтение из файла
fgets
string fgets ( resource $handle [, int $length ] );
//Читает файл построчно
$filename = "/usr/local/something.txt";
$handle = fopen($filename, "r");
$contents = '';
while($row = fgets($handle))
{
    $contents .= $row;
}



//Запись в файл
fwrite
int fwrite ( resource $handle , string $string [, int $length ] )
/* fwrite() записывает содержимое string в файловый поток handle.
Если передан аргумент length, запись остановится после того,
как length байтов будут записаны или будет достигнут конец
строки string, смотря что произойдёт первым.
fputs() - псевдоним функции fwrite (делает тоже самое) */




fseek
int fseek ( resource $handle , int $offset [, int $whence = SEEK_SET ] );
/*Устанавливает смещение в файле, на который ссылается handle.
Новое смещение, измеряемое в байтах от начала файла,
получается путём прибавления параметра offset к позиции,
указанной в параметре whence.
В случае успеха возвращает 0; в противном случае возвращает -1.*/


ftell
int ftell ( resource $handle )
/*Возвращает позицию файлового указателя handle.*/



feof
bool feof ( resource $handle )
/*Проверяет, достигнут ли конец файла.*/



fclose
bool fclose ( resource $handle )
/*Функция закрывает файл, на который указывает дескриптор
handle.*/
