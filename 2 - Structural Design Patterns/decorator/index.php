<?php


require_once 'vendor/autoload.php';


$log = new \DecoratorPattern\BaseLogger();
$log = new \DecoratorPattern\FileLogger($log);
$log = new \DecoratorPattern\DBLogger($log);
$log->log("hello world");


