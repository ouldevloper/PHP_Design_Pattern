<?php

namespace FactoryMethodPattern\Buttons;

abstract class Button
{
    public abstract function show(): string;
    public abstract function click(): void;

}