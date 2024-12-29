<?php

declare(strict_types=1);
class Product
{
    private $id;
    private $name;
    private $price;
    private $description;
    private $stock;

    public function __construct($name, $price, $description, $stock)
    {
        $this->name = $name;
        $this->price = $price;
        $this->description = $description;
        $this->stock = $stock;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getStock()
    {
        return $this->stock;
    }

    public function updateStock($quantity)
    {
        $this->stock -= $quantity;
    }
}

/*
$produit1 = new Product("Sneakers", 59.99, "A pair of stylish running sneakers.", 25);
print($produit1->getName()."\n");
print($produit1->getPrice()."\n");
print($produit1->getDescription()."\n");
$produit1->updateStock(20);
print($produit1->getStock()."\n");
*/