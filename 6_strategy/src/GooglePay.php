<?php


namespace StrategyPattern;

class GooglePay implements IPayStrategy
{
    public function pay(): string
    {
        return "The payment Done by Google Pay Method\n";
    }
}