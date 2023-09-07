<?php

require_once './vendor/autoload.php';


$systemButton = new \FactoryMethodPattern\Dialogs\SystemDialog();
echo $systemButton->renderDialog();

