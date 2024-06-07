<?php
// junior nahayo

    class Muziek{

        public function __construct(public $price, public $name, public $currency = "&euro"){
            $this->name = ucfirst($name);
        }

        public function formatPrice(){
            return number_format($this->price, 2, ',', '.');
        }

    }

    $m1 = new Muziek(40, "Guns & Roses", currency: "$");

    echo $m1->name . "<br>";
    echo $m1->currency;
    echo $m1->price . "<br><br>";

?>