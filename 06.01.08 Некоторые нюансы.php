<?php

/*НЕКОТОРЫЕ НЮАНСЫ
Объекты всегда передаются по ссылке.*/
class SimpleClass
{
  public $publicProperty = 0;
}
//отдельно функция
function increment($object)
{
  $object->publicProperty++;
}


// НЕКОТОРЫЕ НЮАНСЫ (Ч.2)
$object1 = new SimpleClass();
$object2 = new SimpleClass();
echo $object2->publicProperty; // 0, значение по умолчанию
increment($object2);
echo $object2->publicProperty; //вот тут будет 1, а не 0


/*НЕКОТОРЫЕ НЮАНСЫ (Ч.3)
Очевидно, но не хватало таких примеров. Методы можно вызывать в
других методах.*/


// НЕКОТОРЫЕ НЮАНСЫ (Ч.4)
class SimpleClass
{
  public function publicMethod()
  {
    echo 'Hello ';
    $this->anotherMethod();
  }
  public function anotherMethod()
  {
    echo 'world';
  }
}

/*НЕКОТОРЫЕ НЮАНСЫ (Ч.5)
Если вам еще не расказывали, существует стандарт PSR.
1. Называйте класс всегда с большой буквы, и каждое слово в нём
НапримерВотТак
2. Методы должны начинаться с маленькой буквы напримерВотТак
3. Фигурные скобки - каждая на новой строке для методов и классов*/
