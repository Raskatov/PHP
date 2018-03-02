<?php
/*ФУНКЦИЯ - ЭТО
• Блок кода (подпрограмма), имеющий имя
• Принимающий аргументы
• Возвращающий значение*/



// Функции: синтаксис
function greater($a, $b)// аргументы
{
    if ($a > $b) { // использование аргументов
        return true; // возвращаемое значение
    }
    return false; // возвращаемое значение
}


// Функция также может не принимать аргументов:
function is_odd_day()
{
    $day = (int)date('d');
    if (($day % 2) === 1) return true;
    return false;
}


// И не возвращать значения (вернет NULL)
function hello($name)
{
    echo "Привет, " . $name;
}



// Аргументы по умолчанию
function get_title($title, $for_h1 = false)
{
    if ($for_h1 === false) return "<title>" . $title . "</title>";
    return "<h1>" . $title . "</h1>";
}
$title = "Главная страница";
?>
<head><?= get_title($title) ?></head> <!--<title>Главная страница</title>-->
<body><?= get_title($title, true) ?></body> <!--<h1>Главная страница</h1>-->
<?


// Области видимости переменных
//Области видимости: пример
function test_function()
{
    $test = 1;
//переменная $test будет доступна только внутри функции

    return true;
}
$x = 5;
// переменная $x будет доступна только вне функции, и недоступна внутри


//Другой пример
function test_function()
{
    $x = 3; // внутри функции $x == 3;
    return $x;
}
$x = 5; // вне функции $x == 5
$a = test_function(); // $x == 5, $a == 3;


//Глобальные и статические переменные
function test_function()
{
    global $x;
    // получили доступ к глобальной переменной, $x == 5
    return $x;
}
$x = 5; // вне функции $x == 5
$a = test_function(); // $x == 5, как и раньше, но $a == 5;


//Другой пример
function test()
{
    $a = 0;
    echo $a; // всегда будет 0
    $a++;
}


//Другой пример
function test()
{
    static $a = 0; // только при первом вызове
    echo $a;
    $a++; // значение будет сохранено
}
