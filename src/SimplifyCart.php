<?php

declare(strict_types=1);
class SimplifyCart
{
    private $products = [];

    public function addProduct($product, $quantity)
    {
        if (isset($this->products[count($this->products) + 1])) {
            $this->products[count($this->products) + 1]['quantity'] += $quantity;
        } else {
            $this->products[count($this->products) + 1] = [
                'product' => $product,
                'quantity' => $quantity
            ];
        }
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function clearProducts() {
        $this->products = null;
    }
}

/*
$cart = new SimplifyCart();
$cart->addProduct("Green short", 20);
$cart->addProduct("Sunglasses", 5);
$cart->clearProducts();
var_dump($cart->getProducts());
*/