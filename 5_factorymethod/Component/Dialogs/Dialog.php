<?php

namespace FactoryMethodPattern\Dialogs;




use FactoryMethodPattern\Buttons\Button;

abstract class Dialog
{
    abstract public function createButton(): Button;

    public function renderDialog(): string
    {
        $button = $this->createButton();
        return "####### {$button->show()} #######";
    }
}