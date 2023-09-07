<?php


namespace StrategyPattern;

interface IPayStrategy 
{
    public function pay(): string;
}