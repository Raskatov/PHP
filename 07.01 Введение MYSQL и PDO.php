<?php

/*ЦИКЛ ЖИЗНИ ПРОГРАММЫ НА PHP
• Обработка входных данных от пользователя
• Запрос необходимых данных от системы хранения
• Обработка данных, формирование нужного пользователю представления*/

/*Используя в своем приложении СУБД, вы получите «из коробки» все, о
чем только могли мечтать.
• Высокая скорость поиска и сохранения данных
• Надежность и безопасность
• Простота использования*/


/*РЕЛЯЦИОННЫЕ БАЗЫ ДАННЫХ
Реляционная база данных — база данных, основанная на реляционной
модели данных. Слово «реляционный» происходит от англ. relation
(«отношение», «зависимость», «связь»). Для работы с реляционными БД
применяют реляционные СУБД.
Более простое объяснение – в реляционной базе данных все данные
хранятся в виде таблиц к которым предъявляются особые требования.*/



/*ВСЕ СУБД «ГОВОРЯТ» НА ОДНОМ
ЯЗЫКЕ, КОТОРЫЙ НАЗЫВАЕТСЯ SQL
SQL (structured query language — «язык структурированных запросов») —
декларативный язык, применяемый для создания, модификации и
управления данными в реляционных базах данных.
“Декларативный” значит, что мы не говорим, как сделать операцию, мы
только сообщаем, что мы хотим получить. СУБД сама решает, каким
образом предоставить данные.*/


/*ВОЗМОЖНОСТИ ЯЗЫКА SQL
С помощью SQL запросов мы можете сохранять данные, редактировать,
удалять и самое главное быстро и эффективно искать.*/



/*РАЗДЕЛЯЕМ ПОНЯТИЯ СУБД И БАЗА ДАННЫХ
Следует разделять понятие «база данных» и «система управления
базами данных».
Собственно данные хранятся непосредственно в базе данных в виде
таблиц, а СУБД лишь знает как нужно с ними работать и готова слушать
и исполнять ваши команды на языке SQL.*/



/*ЧТО ТАКОЕ БАЗА ДАННЫХ
База данных обязательно должна включать в себя некоторое количество
таблиц.
Это может быть как несколько сотен таблиц, так и всего одна.
Как правило, приложение использует одну базу данных, в которой
находятся все необходимые для работы таблицы.*/



/*ЧТО ТАКОЕ ТАБЛИЦА
Каждая таблица состоит из столбцов (их называют полями или атрибутами)
и строк (или еще их называют записями).
При создании таблицы вы указываете необходимый набор полей для
данных, а сама информация добавляется уже в виде строк, причем каждая
такая строка с данными содержит в себе данные для каждого из полей
таблицы.*/




/*ТРЕБОВАНИЯ К ТАБЛИЦЕ
• В таблице не должно быть двух одинаковых строк
• У каждого столбца в таблице должно быть уникальное имя в пределах этой
таблицы
• В одной ячейке данных может находиться только одно значение, а не группа
значений, так назыаемое атомарное значение.
• В таблице может не быть ни одной строки, но обязательно должен быть хотя-бы
один столбец.*/











// MYSQL

/*ПОЧЕМУ ИМЕННО MYSQL?
• Простота использования вместе с PHP
• Скорость
• Надежность
• Популярность
• Универсальность
• Бесплатность*/


/*ОСНОВНЫЕ ТИПЫ ДАННЫХ В MYSQL
• Целые (TINYINT, INT, BIGINT для хранения целых чисел)
• Вещественные (FLOAT, DOUBLE, DECIMAL для хранения дробных чисел)
• Строковые (VARCHAR, TEXT для хранения строковых данных)
• Бинарные (BLOB, LONGBLOB для хранения бинарных данных)
• Дата и время (TIMESTAMP, DATETIME для хранения временных меток)*/




// ИСПОЛЬЗОВАНИЕ MYSQL В PHP

// PDO MYSQLI
http://php.net/manual/ru/book.pdo.php http://php.net/manual/ru/book.mysqli.php

// MYSQLI
http://php.net/manual/ru/book.mysqli.php

/*Сопоставимые технологии по производительности, удобству работы и
возможностям. Самое важное отличие – PDO не привязан к MySQL, в
отличие от MySQLi.*/
