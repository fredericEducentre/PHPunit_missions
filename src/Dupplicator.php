<?php

declare(strict_types=1);
class Duplicator
{
    public $array = [];

    public function duplicate($el, int $multiplicator)
    {
        if ($multiplicator < 0) {
            throw new InvalidArgumentException('Le multiplicateur doit être un entier positif.');
        }

        for ($i = 0; $i < $multiplicator; $i++) {
            array_push($this->array, $el);
        }
        return $this->array;
    }

    public function getArray()
    {
        return $this->array;
    }
}

/*
$duplicator = new Duplicator();
$duplicator->duplicate("something", 2);
var_dump($duplicator->getArray());
*/