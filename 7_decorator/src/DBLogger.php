<?php

namespace DecoratorPattern;

class DBLogger extends LoggerDecorator
{

    public function log(string $msg)
    {
        $this->logger->log($msg);
        echo "<b>DB : </b> $msg\n";
    }
}