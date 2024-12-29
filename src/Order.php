<?php

declare(strict_types=1);
class Order
{
    private $id;
    private $user;
    private $cart;
    private $status;
    private $orderDate;

    public function __construct($user, $cart)
    {
        $this->user = $user;
        $this->cart = $cart;
        $this->status = 'pending';
        $this->orderDate = new DateTime();
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getOrderDate()
    {
        return $this->orderDate->format('d/m/Y');
    }
}

/*
$order1 = new Order("john", "cart");
$order1->setStatus('completed');
print($order1->getStatus()."\n");
print($order1->getOrderDate()."\n");
*/