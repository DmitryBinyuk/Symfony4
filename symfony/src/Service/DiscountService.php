<?php

namespace App\Service;

class DiscountService
{
    public function getDiscountValue()
    {
        $value = rand(1, 10);

        return $value;
    }
}