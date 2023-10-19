<?php
    class Car
    {
        public $color = 'red';
        public $numberOfTires = 4;
        public static $country = "Canada";
        public function __construct($color)
        {
            $this->color = $color;
        }

        public function __destruct()
        {
            echo"<br> Objeto está destruido"  ;    
           
        }
        public function setColor($val)
        {
            $this->color = $val;
            
        }
        public function getColor()
        {
            return $this->color;
        }
    }

$bmw = new Car("White");

echo $bmw->color;

echo $bmw-> getColor(). "<br>" ;

$bmw->setColor("black");

echo $bmw->getColor(). "<br>";

echo Car::$country;

?>