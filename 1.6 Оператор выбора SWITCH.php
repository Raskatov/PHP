<?php

ОПЕРАТОР ВЫБОРА SWITCH

Оператор SWITCH: синтаксис
switch (выражение) {
	case значение1: // выполняется, если выражение == значение1
	break;
	case значение2: // выполняется, если выражение == значение2
	break;
	default: // если ничего не подолшло...
}


//Другой пример
switch ($a > 10) {
	case 0: // выполняется, например, при $a == -10
	break;
	case -10: // не выполняется никогда
	break;
}
