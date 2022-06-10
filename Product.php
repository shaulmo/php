<?php

class Product {
    private $price;

    public function setPrice($value){
        $float = floatval($value);
        $checkFormat = $float <= 0 ? trigger_error('Price must be greater than zero.', E_USER_NOTICE) : $this->price = $float;
    }

    public function getPrice(){
        return '$' . number_format($this->price, 2);
    }
}

$productObj = new Product;
// $productObj->setPrice(-1000); // This Will return an E_USER_NOTICE -> Notice: Price must be greater than zero.
$productObj->setPrice(1000);
echo $productObj->getPrice();
