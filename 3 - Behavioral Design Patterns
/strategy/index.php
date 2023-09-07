<?php

require_once './vendor/autoload.php';

use StrategyPattern\StrategyContext;

$p = new StrategyContext('credit');
echo $p->pay();