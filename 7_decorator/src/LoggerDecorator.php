<?php

namespace DecoratorPattern;
abstract class LoggerDecorator implements ILogger
{
    public function __construct(protected ILogger $logger)
    {
    }
    public abstract function log(string $msg);

}