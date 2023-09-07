<?php

namespace DecoratorPattern;

class FileLogger extends LoggerDecorator
{

    public function log(string $msg)
    {
        $this->logger->log($msg);
        echo "<b>File : </b> $msg\n";
    }
}