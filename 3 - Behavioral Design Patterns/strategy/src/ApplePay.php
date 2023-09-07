<?php


namespace StrategyPattern;
use StrategyPattern\IPayStrategy;
class ApplePay implements IPayStrategy
{
    public function pay(): string
    {
        return "The payment Done by Apple Pay Method\n";
    }
}