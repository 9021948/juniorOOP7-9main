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
            return "Het product " . $this->name . " kost " . $this->currency . " " . $this->price;
        }

        public function formatPrice(){
            return number_format($this->price, 2, ',', '.');
        }

    }

    $muziek1 = new Muziek("Guns N' Roses", 40, currency: "€");
    $muziek2 = new Muziek("Bon Jovi", 25, currency: "€");
    $muziek3 = new Muziek("Nirvana", 50, currency: "€");

    echo $muziek1->getProduct();
    echo "<br>";
    echo $muziek2->getProduct();
    echo "<br>";
    echo $muziek3->getProduct();

?>