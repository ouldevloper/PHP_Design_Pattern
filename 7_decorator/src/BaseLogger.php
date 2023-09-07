<?php

namespace DecoratorPattern;

class BaseLogger implements ILogger
{
    public function log(string $msg)
    {
        echo "<b>BaseLogger: $msg</b>\n";
    }
}