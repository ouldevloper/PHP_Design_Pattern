<?php

namespace FactoryMethodPattern\Buttons;



class SystemButton extends Button
{
    public function show(): string
    {
        return "<systemButton>Click Me</systemButton>";
    }

    public function click(): void
    {
        echo "##### Button Clicked! #####";
    }
}