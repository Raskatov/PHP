<?php

ВСТРОЕННЫЕ ФУНКЦИИ

КАТЕГОРИИ ФУНКЦИЙ
• Вывода
• Строковые
• Математические
• Функции работы с файлами
• Еще миллион встроенных функций
• И функции расширений


ФУНКЦИИ ВЫВОДА
• echo — выводит одну или более строк
• print — выводит строку (синоним echo)
• var_dump — выводит подробную информацию о переменной
• printf — форматированный вывод


ПРИМЕР ИСПОЛЬЗОВАНИЯ ФУНКЦИЙ ВЫВОДА
$name = 'Ivan Petrov';
echo('Ivan Petrov'); //Ivan Petrov
print(34 + 90); //124
print($name); //Ivan Petrov
var_dump($name); //string(11) "Ivan Petrov"


ECHO И PRINT НЕ СОВСЕМ ФУНКЦИИ
$name = 'Ivan Petrov';
echo 'Ivan Petrov'; //Ivan Petrov
print 34 + 90; //124
print $name; //Ivan Petrov


СТРОКОВЫЕ ФУНКЦИИ
• strlen — получить длину строки
• strpos — поиск подстроки в строке
• str_replace — замена подстроки в строке
• substr — получить часть строки 


ПРИМЕР ИСПОЛЬЗОВАНИЯ СТРОКОВЫХ ФУНКЦИЙ
$name = 'Ivan Petrov';
$simbols = strlen($name);
$space = strpos($name, ' ');
$name2 = str_replace('Ivan', 'Oleg', $name);
$lastname = substr($name, $space + 1);
echo $simbols, PHP_EOL, $name2, PHP_EOL,
$lastname;


МАТЕМАТИЧЕСКИЕ ФУНКЦИИ
• max — возвращает наибольшее число
• min — возвращает наименьшее число
• rand — возвращает случайное число
• round — округляет число до нужного количества десятичных знаков


ПРИМЕР ИСПОЛЬЗОВАНИЯ МАТЕМАТИЧЕСКИХ ФУНКЦИЙ
$age1 = rand(18, 90);
$age2 = rand(18, 90);
$age3 = rand(18, 90);
echo max($age1, $age2, $age3);
echo min($age1, $age2, $age3);
$avg = ($age1 + $age2 + $age3)/ 33;
echo round($avg);


УПРАВЛЯЮЩИЕ ФУНКЦИИ
• exit — выводит сообщение и
завершает выполнение скрипта
• die — синоним exit


ПРИМЕР ИСПОЛЬЗОВАНИЯ УПРАВЛЯЮЩИХ ФУНКЦИЙ
if (!$isAdmit) die(‘access error’);
echo $adminData;


ФУНКЦИИ РАБОТЫ С ФАЙЛАМИ
• file_get_contents — возвращает содержимое файла как строку
• file_put_contents — сохраняет строку в файл
• is_file — проверяет существование файла
• is_readable — проверяет доступен ли файл/ папка для чтения
• is_writable — проверяет доступен ли файл/ папка для записи


ПРИМЕР ИСПОЛЬЗОВАНИЯ ФУНКЦИЙ ДЛЯ РАБОТЫ С ФАЙЛАМИ
$filename = 'yes.txt';
if (!is_file($filename)) die('no file');
if (!is_readable($filename)) die('no access');
$data = file_get_contents($filename);
$no = str_replace('yes', 'no', $data);
file_put_contents('no.txt', $no);

?>
