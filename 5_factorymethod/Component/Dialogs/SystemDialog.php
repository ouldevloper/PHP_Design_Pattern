<?php


namespace FactoryMethodPattern\Dialogs;



use FactoryMethodPattern\Buttons\Button;
use FactoryMethodPattern\Buttons\SystemButton;


class SystemDialog extends Dialog
{
    public function createButton():Button
    {
        return  new SystemButton();
    }
}

