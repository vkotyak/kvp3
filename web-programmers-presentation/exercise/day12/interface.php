<?php
/**
Домашнее задание:

1) Создать класс Консультация, который как либом имплементирует интерфейс Priceable и не наследуются от продукта.
2) Создать класс Страховка, который имплементирует интерфейс Priceable и Saveable и не наследуются от продукта.
3) Создать объекты этих классов. Добавить их в корзину. Сохранить объект Страховка в базе данных.
*/


interface Saveable
{
    public function save();
}

class DB {
    static function saveObject(Saveable $o){
        $o->save();
    }
}

interface Priceable
{
    public function getPrice();
}

interface Quantityable
{
    public function getQuantity();
}

abstract class Product implements Priceable, Saveable
{
    protected $_price;
    protected $_title;

    public function __construct($title, $price)
    {
        $this->_price = $price;
        $this->_title = $title;
    }

    public function save()
    {
        echo "saved product<br>";
    }

    public function getPrice()
    {
        return $this->_price;
    }

    abstract public function getType();
}

class Good extends Product
{
    public function getType()
    {
        return "Product";
    }
}

class Service extends Product
{
    public function getType()
    {
        return "Service";
    }
}

class CartItem implements Quantityable, Saveable
{
    protected $_priceable;
    protected $_quantity;

    public function __construct(Priceable $priceable, $quantity)
    {
        $this->_priceable = $priceable;
        $this->_quantity = $quantity;
    }

    public function getQuantity()
    {
        return $this->_quantity;
    }

    public function getAmount()
    {
        return $this->_priceable->getPrice() * $this->getQuantity();
    }

    public function save()
    {

        echo "saved CartItem<br>";
    }
}

class Cart implements Saveable {
    protected $_items;
    public function add($product, $quantity) {
        $this->_items[] = new CartItem($product, $quantity);
    }

    public function getSum(){
        $sum = 0;
        foreach ($this->_items as $item) {
            $sum += $item->getAmount();
        }
        return $sum;
    }

    public function save(){
        foreach ($this->_items as $item) {
            DB::saveObject($item);
        }
    }
}



$good1 = new Good("Зубная паста", 100);
$good2 = new Good("Ручка", 50);
$service = new Service("Стрижка", 100);

DB::saveObject($good1);
DB::saveObject($good2);
DB::saveObject($service);


$cart = new Cart();
$cart->add($good1, 1);
$cart->add($good2, 3);
$cart->add($service, 1);
echo "Итого: ", $cart->getSum(), "<br>";
$cart->save();



?>