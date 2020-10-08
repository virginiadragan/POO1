<?php


class Car
{
    private $color;
    private $brand;
    private $mileage;
    private $price;

    public function __construct($color, $price) {
        $this->color = $color;
        $this->price = $price;
    }

    public function setColor($color){
        $this->color = $color;
    }

    public function setBrand($brand){
        $this->brand = $brand;
    }

    public function setMileage($mileage){
        $this->mileage = $mileage;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getColor(){
        return $this->color;
    }

    public function getBrand(){
        return $this->brand;
    }

    public function getMileage(){
        return $this->mileage;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getCarInfo () {
        echo "Car color: " . $this->color . " car brand: " . $this->brand . " car mileage: " . $this->mileage . " car price: " . $this->price;
    }

    public function checkColor($color){
        return $color == 'black';
    }
}