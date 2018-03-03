<?php

// АБСТРАКТНЫЕ КЛАССЫ


/*А ДАВАЙТЕ ДОБАВИМ ОПИСАНИЯ?
Что же. Теперь перед нами стоит новая задача. Нужно, чтобы каждый тип
продукта имел метод getDescription, который бы возвращал описание,
уникальное для каждого типа продукта.
Например, в случае с флэшками, это может быть: "Флэшка на N мегабайт",
где N, мы возьмем из соответствующего свойства.
Но для начала, давайте разберемся, что такое абстрактные классы и
методы. И как они могут нам пригодиться.
36*/

/*АБСТРАКТНЫЕ КЛАССЫ И МЕТОДЫ
Говоря по простому, абстрактные методы - это методы, не имеющие
реализации.*/
//класс, содержаший абстрактные методы, является абстрактным
abstract class AbstractClass
{
  abstract function AbstractMethod(); //абстрактный метод
  //...у которого нет тела
}


/*АБСТРАКТНЫЕ КЛАССЫ И МЕТОДЫ
Некоторые свойства абстрактных классов
— Мы не можем создать объект абстрактного класса (т.к. есть методы,
которые не имеют реализации)
— Абстрактный класс может содержать, как абстрактные методы, так и
конкретные реализации.
На базе абстрактных методов строятся и паттерны проектирования, но об
этом - в другой раз*/


/*О_О ЗАЧЕМ?
По правде говоря, это лишь возможность организовать свой код так, как
задумано.
Например, для примера выше - если мы добавим в класс Product
конкретное описание по умолчанию, которое унаследуют все классы, мы
можем забыть описать его в одном из дочерних классов и получить не
ожидаемое поведение.*/



// ВЕРНЕМСЯ К ПРИМЕРУ
class Product
{
  //тут все остальные свойства и методы
  public function getDescription()
  {
    // реализация по умолчанию, которую получат все дочерние // но наша задача - обязать переопределять это поведение
    return '';
  }
}


// ВЕРНЕМСЯ К ПРИМЕРУ (С АБСТРАКТНЫМ КЛАССОМ)
abstract class Product //класс объявлен абстрактным
{
  public $price; // цена есть у любого товара
  public $title; // название - тоже
  // тут все остальные методы
  abstract public function getDescription(); //абстрактный метод
}


/*В ЧЕМ ПРОФИТ?
Теперь мы точно не забудем определить в Книгах и Флэшках описание -
если не определить в них конкретную реализацию для абстрактных
методов, php тихохонько ругнётся при попытке создания объекта. Или не
тихохонько. Но работать не будет.
Вообще всю суть и пользу абстрктных классов нужно прочувствовать.
Чаще всего они вам не понадобятся, но когда вы столкнетесь с
соответствующей задачей, будете радоваться, что они существуют :)*/

// В ЧЕМ ПРОФИТ? (КОД)
class Flash extends Product
{
  public $memory;
  //тут остальные свойства и методы

  //описываем реализацию абстрактного метода
  public function getDescription()
  {
    return "Флэшка на {$this->memory} мегабайт"
  }
}



/*КЛЮЧЕВОЕ СЛОВО PARENT
Хорошо, а теперь, предположим наша задача поменялась. Мы провели
маркетинговое исследование и поняли, что в описание нужно обязательно
включать цену. Например, большинство клиентов звонят в call-центр и
уточняют её, т.к. цена на сайте расположена неудобно.
Сначала, забудем на секунду об абстрактных классах и попробуем решить
проблему максимально просто.
Для этого переделаем наш класс Product.*/

// КЛЮЧЕВОЕ СЛОВО PARENT (КОД)
class Product //класс перестал быть абстрактным
{
  //тут остальные свойства и методы

  public function getDescription() //это уже НЕ абстрактный 
  {
    echo “Цена: {$this->price}”; // по умолчанию в описании 
  }
}


/*КАК СДЕЛАТЬ ТАК, ЧТОБЫ ВСЕМ БЫЛО ХОРОШО?
Проблема следующая - если мы просто перегрузим метод в дочерних
классах, вывод цены мы тоже перетрем. И нам придется дублировать код.
А если мы захотим там же выводить и название в описании для всех
товаров в будущем? Изменения потребуются в трех местах (двух дочерних
и одном родительском классе).
Нам это не подходит. НО. Мы можем обращаться к реализации любого
метода родителя через ключевое слово parent*/

// КЛЮЧЕВОЕ СЛОВО PARENT (КОД)
class Flash extends Product
{
  //тут остальные свойства и методы

  public function getDescription()
  {
    parent::getDescription(); // обратились к методу родительского
    //добавили к описанию родителя всё, что хотим
    echo “Флэшка на {$this->memory} мегабайт”
  }
}

/*НО... КАК ЖЕ АБСТРАКЦИЯ?
Выше мы говорили, что абстракция позволяет избежать нам ошибок. По
крайней мере мы требуем добавления уникальных свойств каждого
продукта в описание.
Конечно, ничего критичного (описание всегда будет минимум содержать
цену), но мы ожидаем, что описание будет уникально для каждого типа
продукта.
Проведем небольшой рефакторинг. Он поможет лучше понять, как еще
можно работать с абстрактными классами и каким вторым способом
можно было решить задачу.*/

// НО... КАК ЖЕ АБСТРАКЦИЯ? (КОД)
abstract class Product //и снова класс объявлен абстрактным
{
  //тут остальные свойства и методы
  public function getFullDescription()
  {
    echo “Цена: {$this->price}”; // по умолчанию в описании 
    $this->getDescription(); // да, да мы обращаемся к РЕАЛИЗАЦИИ 
  }
  abstract public function getDescription(); //абстрактный метод
}

/*ЧТО У НАС ПОЛУЧИЛОСЬ?
Это позволяет нам не обращаться в дочерних классах к родителю.
Достаточно реализовать метод getDescription, а запрашивать описание
через getFullDescription.
При этом мы закрыли обе проблемы - мы не забудем добавить уникальное
описание, и наше общее описание всегда будет содержать всю нужную
информацию.*/


/*Например, нам не нужно, чтобы от класса
Book наследовались какие-то свойства. Чтобы ненароком, другой
программист не вздумал наследовать флэшки от книг (в жизни бывает
всякое).
В общем виде - архитектурно - длинные цепочки наследования
увеличивают сложность системы. Изменения в родителе влияют на всех
потомков. Поэтому при сложной структуре можно получить ошибки. Это не
значит, что это плохо. Но нужно правильно их использовать.*/


/*В связи с вышесказанным - поэтому последний уровень нашей цепочки
всегда стоит закрывать, если мы не хотим его расширения
Это делается при помощи ключевого слово final*/


/*FINALITY
При этом окончательным может быть не только класс, но и конкретный
метод. Это запрещает его перегрузку.*/
//теперь никто не сможет наследовать методы и свойства данного 
final class Flash extends Product
{
  //тут остальные свойства и методы
}
