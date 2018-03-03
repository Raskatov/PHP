<?php

/*Коды статусов HTTP
1xx - информационный класс
2хх - класс успешного выполнения
3хх - класс переадресации
4хх - класс клиентских ошибок
5хх - класс ошибок сервера
*/



/*РАБОТА С ЗАГОЛОВКАМИ
• getallheaders()
• header($string, $replace=true, $http_response_code=null)
• Также можно получить заголовки из $_SERVER (c префиксом «HTTP_»)*/


/* ОШИБКА "HEADER ALREADY SENT"
Когда:
• output_buffering = Off
• Заголовки ответа устанавливаются после вывода данных (в теле ответа).
Как избежать:
• Во первых, не устанавливать заголовки, когда уже произошел вывод данных.
• Также можно установить в конфигурационном файле PHP output_buffering = On */



/* СУПЕРГЛОБАЛЬНАЯ ПЕРЕМЕННАЯ $_SERVER
$_SERVER - массив, содержащий информацию, такую как заголовки,
пути и местоположения скриптов. Записи в этом массиве создаются веб-сервером.*/
… 
[SERVER_PORT] => 80
[SERVER_NAME] => lessons.loc [REDIRECT_STATUS] => 200
[HTTP_HOST] => lessons.loc
[HTTP_CONNECTION] => keep-alive
[HTTP_PRAGMA] => no-cache
[SCRIPT_NAME] => /index.php
[REQUEST_URI] => /
[DOCUMENT_URI] => /index.php
…


/* ЗАГОЛОВОК CONTENT-TYPE
• Content-type: <mime-тип>; <прочие параметры>
• Заголовок Content-type предназначен для идентификации типа передаваемых данных
• MIME- типы (text/html, application/json, application/pdf и др.)*/


/* СОЗДАНИЕ ИЗОБРАЖЕНИЯ НА ЛЕТУ
• Использование графической библиотеки GD
• Установка заголовка Content-type: image/jpeg
• Вывод содержимого изображения */
$text = 'Некоторый текст';
header('Content-type: image/jpeg');
// Пользовательская функция
create_img($text);


/* БИБЛИОТЕКА GD - УСТАНОВКА
• Windows: Раскомментировать строку в файле php.ini «;extension=php_gd2.dll»
• Linux: «apt-get install php5-gd»
*/


/*БИБЛИОТЕКА GD - ФУНКЦИИ
imagecreatetruecolor – создание нового полноцветного изображения
• imagecolorallocate – создание цвета для изображения
• imagefill – заливает область цветом
• imagefilledellipse – рисует закрашенный эллипс
• imagecreatefrompng - создает новое изображение из файла
• imagecopy - копирование части изображения
• http://php.net/manual/ru/ref.image.php */


/*СОХРАНИТЬ ВЫВОД В ФАЙЛ
• Content-Disposition – определяет как следует обрабатывать содержимое сообщения.*/
header('Content-Disposition: attachment; filename="Имя файла"');



/*РЕДИРЕКТ
• 301 – Ресурс перемещен навсегда
• 302 – Ресурс временно перемещен
• Location: <Адрес перенаправления>*/
header('Location: http://icron.org');


/*500 И 404 КОДЫ ОШИБОК
• http_response_code($code)
• exit($status)*/
if (empty($_GET['id'])) {
    http_response_code(404);
    echo 'Cтраница не найдена!';
    exit(1);
}
