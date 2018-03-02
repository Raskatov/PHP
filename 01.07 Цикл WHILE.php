<?php

Цикл WHILE
ЦИКЛ WHILE: синтаксис
while (условие) {
	// операторы
}

Другой пример
$ready = false;
while (!$ready) {
	// операторы
	$ready = true;
}


Цикл DO... WHILE
ЦИКЛ DO...WHILE: синтаксис
do {
	// операторы
} while (условие)

Другой пример
<select>
<?php
$option = 0;
$text = "Выберите...";

do {
	echo "<option='{$option}'>{$text}</option>";
	// получение данных, например, из БД
} while ($option !== false)
