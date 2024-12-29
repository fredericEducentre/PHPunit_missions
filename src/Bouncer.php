<?php

declare(strict_types=1);

class Bouncer
{
    public function isMajor(int $age)
    {
        if ($age >= 18) {
            return true;
        } else {
            return false;
        }
    }
}

/*
$bouncer = new Bouncer();
var_dump($bouncer->isMajor(16));
var_dump($bouncer->isMajor(30));
*/