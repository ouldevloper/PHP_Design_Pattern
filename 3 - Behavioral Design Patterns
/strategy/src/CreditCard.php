<?php

namespace StrategyPattern;
use StrategyPattern\IPayStrategy;

class CreditCard implements IPayStrategy
{
    public function pay(): string
    {
        return "The payment Done by Credit Card Method\n";
    }
}