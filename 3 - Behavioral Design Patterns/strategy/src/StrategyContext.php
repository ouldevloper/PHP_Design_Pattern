<?php

namespace StrategyPattern;



class StrategyContext
{
    private IPayStrategy $context;
    public function __construct(string $payMethod)
    {
        $this->context = match ($payMethod) {
            'google' => new GooglePay(),
            'apple'  => new ApplePay(),
            'card'|'credit'   => new CreditCard(),
            default  => throw new \Exception('Invalid Payment Method')
        };
    }
    public final function pay(): string
    {
        return $this->context->pay();
    }
}