<?php

/*

Нужно создать класс родитель Конечность(Limb) с публичным методом move и защищенным свойством type. Унаследовать от него классы Рука(Hand) и Нога(Leg). Создать класс Человек. У которого есть защищенное свойство конечности. Это массив из двух рук и двух ног. Руки и ноги инициализируются при создании человека. У человека есть публичный метод move и защищенные методы moveHand и moveLeg

*/



class Limb {

    protected $_type = "Limb";

    function move(){

        echo "move " . $this->_type, "<br>";

    }

}



class Human {

    protected $_limbs = array();

    function __construct () {

        $this->_limbs[] = new Limb();

        $this->_limbs[] = new Limb();

        $this->_limbs[] = new Limb();

        $this->_limbs[] = new Limb();

    }

    protected function _moveHands(){

        $this->_limbs[0]->move();

        $this->_limbs[1]->move();        

    }

    protected function _moveLegs(){

        $this->_limbs[2]->move();

        $this->_limbs[3]->move();        

    }    

    public function move(){

        $this->_moveHands();

        $this->_moveLegs();

    }

}



$h = new Human();

$h->move();



?>