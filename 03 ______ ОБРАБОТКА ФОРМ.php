<?php

/*ОСНОВЫ ПРОТОКОЛА HTTP
• HyperText Transfer Protocol
• Является протоколом прикладного 7-ого уровня (по спецификации OSI)
• Режим «запрос-ответ»*/



/* СТАРТОВАЯ СТРОКА ЗАПРОСА HTTP 1.1
<Метод> <URI> HTTP/<Версия>
• Метод – определяет операцию (GET, POST, PUT, DELETE и др.)
• URI (Uniform Resource Identifier) – путь до ресурса
• Версия */


/* СТАРТОВАЯ СТРОКА ОТВЕТА HTTP 1.1
HTTP/<Версия> <Код состояния><Пояснение>
• Версия
• Код состояния (Status Code) — три цифры
• Пояснение к коду состояния (Reason Phrase) — текстовое.*/


/*ПРОЧИЕ ТОНКОСТИ И РАСШИРЕНИЯ HTTP 1.1
• Конец заголовка – дважды: возврат
каретки (\r) + символ перевода строки(\n).
• Расширение HTTPS (Secure) */


/*POST И GET
• GET передает данные серверу используя URL
• POST передает данные, используя тело HTTP запроса
• GET - 1024 символа*/


/*ОБРАБОТКА POST И GET
• Суперглобальные переменные $_GET, $_POST, $_REQUEST */
if (isset($_GET['name'])) {
    echo 'Hello ' . htmlspecialchars(($_GET['name']));
}


//ПРОСТАЯ HTML ФОРМА
?>
<form action="/" method="post">
<input name="fio" type="text" placeholder="Введите ФИО">
<input type="submit" value="Отправить">
</form>
<?



/*ВАЛИДАЦИЯ ДАННЫХ
• Приводим к нужному типу
• Очищаем код от вредоносных вставок
• Делаем проверки на разрешенное содержимое*/



/*ПРИВОДИМ К НУЖНОМУ ТИПУ
• (тип)$variable
• Типы: bool или boolean, float, string, array, int или integer */
$sVariable = '911a';
$iVariable = (int)$sVariable;
//$iVariable имеет значение 911


/*ПРИНИМАЕМ, ФИЛЬТРУЕМ И ПРОВЕРЯЕМ
• filter_input – принимает переменную извне и при необходимости фильтрует ее*/
$options = [
    'options' => [
        'min_range' => 10,
        'max_range' => 200
    ]
];
$f = FILTER_VALIDATE_INT;
$r = filter_input(INPUT_GET, 'name', $f, $options);



/*ФИЛЬТРУЕМ И ПРОВЕРЯЕМ
• filter_var – проверка на соответствующий фильтр и получение значение в случае успеха*/
$options = [
    'options' => [
        'min_range' => 10,
        'max_range' => 200
    ]
];
$f = FILTER_VALIDATE_INT;
$r= filter_var('123', $f, $options); // 123
$r= filter_var('1a', $f, $options); //false
$r= filter_var('2', $f, $options); //false



/*ОЧИЩАЕМ ПРИ ВЫВОДЕ
• htmlspecialchars – Преобразует спец символы в HTML сущности.*/
htmlspecialchars('<script></script>');



/*ОБРАБОТКА ФАЙЛОВ НА СЕРВЕРЕ
• enctype =«multipart/form-data»
• Глобальный массив $_FILES
• move_uploaded_file($fname, $dest)*/



/*ФОРМА ДЛЯ ОТПРАВКИ ФАЙЛОВ
Тип кодирования данных, enctype, ДОЛЖЕН БЫТЬ указан ИМЕННО так*/
?>
<form enctype="multipart/form-data" action="/2/index.php" method="POST">
    ФИО: <input name="fio" type="text" placeholder="Введите ФИО">
    <br />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Аватар: <input name="userfile" type="file" />
    <br />
    <input type="submit" value="Отправить">
</form>
<?
