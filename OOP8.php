<?php
// junior nahayo
    class Muziek{

        public $name;
        public $price;
        public $currency;

        public function __construct($name, $price, $currency = "€"){
            $this->name = ucfirst($name);
            $this->price = $price;
            $this->currency = $currency;
        }

        public function getProduct(){
            return "Het product " . $this->name . " kosten " . $this->currency . " " . $this->price;
        }

        public function formatPrice(){
            return number_format($this->price, 2, ',', '.');
        }

    }

    $muziek1 = new Muziek("21 savage", 77, currency: "€");
    $muziek2 = new Muziek("gun lean", 76, currency: "€");
    $muziek3 = new Muziek("blauw", 33, currency: "€");

    echo $muziek1->getProduct();
    echo "<br>";
    echo $muziek2->getProduct();
    echo "<br>";
    echo $muziek3->getProduct();

?>