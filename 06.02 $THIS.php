<?php

//$THIS
/*Итак. Мы должны иметь возможность работать со свойствами и методами
внутри контекста. Как это сделать? Встречаем - $this */
class SimpleClass
{
    public $simpleProperty = 100;
    public function simpleMethod()
    {
        $this->simpleProperty = 200; //меняем значение свойства
    }
}

/*УКАЗАТЕЛЬ НА ОБЪЕКТ
Важно: $this указывает на конкретный объект, в рамках которого
вызывается.*/
$object = new SimpleClass();
$anotherObject = new SimpleClass();

echo $object->simpleProperty; // 100
echo $anotherObject->simpleProperty; // 100
$object->simpleMethod(); // поменяли значение свойства
echo $object->simpleProperty; // стало 200
echo $anotherObject->simpleProperty; //осталось 100!


/*ЕЩЁ ДЛЯ ПОНИМАНИЯ
Допустим, есть класс Car с методом changeColor.*/
class Car
{
    //тут иные свойства и методы
    public $color = 'Белая'; // все машины по умолчанию - белые

    public function changeColor($color) //метод перекрашивания
    {
        //заменяем цвет конкретного объекта
        $this->color = $color; //на тот, что пришел в методе
    }
}


/*ЕЩЁ ДЛЯ ПОНИМАНИЯ Ч.2
От того, что мы перекрасили Ауди в красный, BMW ни тепло, ни холодно.
Она как была белой, так ей и остаётся.*/
$audi = new Car();
$bmw = new Car();

$audi->changeColor('Красный'); //теперь мы имеем красную ауди
echo $bmw->color; //БМВ остается белым, его никто не перекрашивал

//это ещё одна Ауди
$anotherAudi = new Car(); // какого она цвета?



/*КАК ЭТО ПРИМЕНИТЬ К ПРОДУКТАМ?
Давайте теперь перенесём нашу функцию, которой мы передавали три
параметра в метод (немного упростим) и посмотрим, как это в итоге будет
работать*/
class Product
{
    public $name;
    public $price;
    public $discount;
    public $category;
    public function getPrice()
    {
        //это будет на следующем слайде
    }
}


//КОД МЕТОДА
class Product
{
    //тут свойства - name, category, discount, price
    public function getPrice()
    {
        // упростил - нет скидки за смартфоны
        if ($this->discount) {
            return round(($this->price - ($this->price  * $this->discount);
        } else {
            return $this->pric;
        }
    }
}


//КОД МЕТОДА (Ч.2)
class Product
{
  //тут свойства - name, category, discount, price
  public function getPrice()
  {
    $phoneDiscount = ($this->category == 'Смартфон')
    $discount = min($this->discount , $phoneDiscount);
    if ($this->discount) {
      return round($this->price - ($this->price * $this->discount));
    } else {
      return $this->price;
    }
  }
}


// КАК С ЭТИМ ЖИТЬ?
$product = new Product;
$product->name = 'Apple iPhone 7';
$product->price = 50000;
$product->discount = 10; //в процентах
echo $product->getPrice(); //выведет 45000;
$anotherProduct = new Product;
$anotherProduct->name = 'Samsung Galaxy S4';
$anotherProduct->price = 50000;
echo $anotherProduct->getPrice(); //сколько выведет?
