<?php

// МАГИЧЕСКИЕ МЕТОДЫ. КОНСТРУКТОР.
/*О МАГИЧЕСКИХ МЕТОДАХ
Магических методов в php довольно много - ссылка на документацию (http://php.net/manual/ru/language.oop5.magic.php)
Все они - зарезервированные слова и начинаются с двух знаков
подчеркивания __. Мы рассмотрим их детальней на следующих лекциях.
А сейчас научимся работать с самым популярным из магических методов -
конструктором.
*/

/*КОНСТРУКТОР
Конструктор - это специальный метод, который вызывается в момент
создания объекта*/
class SimpleClass
{
  public function __construct() 
  {
    //содержимое конструктора
    echo 'Был создан объект класса SimpleClass';
  }
}

/*КОНСТРУКТОР Ч.2
Для класса выше, картина будет такая:*/
$object = new SimpleClass(); // вот в этот момент вызывается конструктор
$anotherObject = new SimpleClass(); // и тут вызывается конструктор 
$superObject = new SimpleClass(); // и вот тут
// Сколько строк "Был создан объект класса SimpleClass"
// будет выведено в данном примере?

/*КОНСТРУКТОР Ч.3
В конструктор можно также передавать параметры, как и в функцию. И
обычно конструктор используется для установки некоторых базовых
значений для объекта .*/
class SimpleClass
{
  public $property;
  public function __construct($property)
  {
    $this->property = $property;
  }
}

/*КОНСТРУКТОР Ч.4
Вот как с этим работать*/
//вот как передавать параметры сразу при создании объекта
$object = new SimpleClass(100); //конструктор
$anotherObject = new SimpleClass(200); //конструктор

echo $object->property; // что выведет?
echo $anotherObject->property; // что выведет?

$object->property = 1000;
echo $object->property; //что выведет


/*ПОЧЕМУ ЭТО ХОРОШО
1. В ряде случаев объекты бессмысленны и не могут работать без задания
соответствующих параметров. Например, товар. Как минимум, мы
изначально, при создании объекта должны знать что мы продаем
(название) и цену. Если мы забудем что-то из этого - всё будет плохо.
2. Меньше кода пишем, в момент создания объекта мы понимаем, что мы
создаём и зачем. Очень удобно.*/


// НА ПРИМЕРЕ С ПРОДУКТОМ
class Product
{
  //тут свойства name, price, discount, category
  public function __construct($name, $price, $discount
  {
    $this->name = $name;
    $this->price = $price;
    $this->discount = $discount;
  }
  //тут метод getPrice
}


// КАК С ЭТИМ РАБОТАТЬ?
// согласитесь - понятней и удобней
$iphone = new Product('Apple iPhone 7', 50000, 10);
$galaxy = new Product('Samsung Galaxy S7', 50000);
//и можно сразу работать со свойствами и методами
echo $iphone->price; //что выведет?
echo iPhone->name; //что выведет?
echo $galaxy->price; //что выведет?
echo $iphone->getPrice(); //что выведет?

/*ПРО КОНСТРУКТОРЫ
1. В общем и целом, чаще всего конструкторы используются для
предварительной инициализации объектов, чтобы с ними можно сразу
было работать
2. При этом не стоит сразу в них пытаться передать все возможные
параметры - старайтесь передавать то, что нужно для старта и без чего
объект не имеет смысл
3. Общий смысл магических методов - реакция на какие-то события
связанные с работой объектов. Конструктор вызывается при срабатывании
события "создание объекта"*/

/*ЧТО ЕЩЁ?
Всё круто, но есть ещё один момент. В нашем примере с продуктами для
Интернет-магазина. Бизнес-логика такова, что мы обязаны везде выводить
цену через метод getPrice, чтобы учитывать скидку.
Но никто не мешает обращаться к свойству price напрямую и, что ещё
более печально, изменять его. Никто не застрахован от человеческого
фактора.
А вот мы попробуем застраховаться*/
