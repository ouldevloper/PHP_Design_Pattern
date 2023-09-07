<?php

Interface IProduct
{
    public function add(string $name, float $price, float $quantity):void;
    public function update(string $property, mixed $value):void;

}