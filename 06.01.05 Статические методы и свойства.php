<?php

// СТАТИЧЕСКИЕ МЕТОДЫ И СВОЙСТВА
/*СТАТИЧЕСКИЕ СВОЙСТВА (Ч.2)
Статические свойства объявляются через ключевое слово static и
являются свойствами класса, а не объекта*/
class SimpleClass
{
  public static $staticProperty = 0; //статическое свойство
  //которое также может иметь область видимости
}
echo SimpleClass::$staticProperty; //вот так можно
$object = new SimpleClass();
$object::$staticProperty; //а вот так нельзя



/*СТАТИЧЕСКИЕ СВОЙСТВА (Ч.3)
К статическим свойствам можно обращаться внутри методов. Но через self::*/
class SimpleClass
{
  public static $staticProperty = 0; //статическое свойство
  public function publicMethod()
  {
    echo self::$staticProperty;
  }
}
$object = new SimpleClass();
$object->publicMethod(); //выведет 0


/*СТАТИЧЕСКИЕ МЕТОДЫ
Со статическими методами всё также, но к ним можно обращаться из
объекта.*/
class SimpleClass
{
  public static $staticProperty = 0; //статическое свойство
  public static function staticMethod() //статический метод
  {
    echo self::$staticProperty;
  }
}
$object = new SimpleClass();
$object::staticMethod(); //вот так тоже можно
