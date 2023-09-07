<?php


require_once './Editor.php';
require_once './Editorstate.php';
require_once './History.php';


$editor = new Editor();
$history = new History();

$editor->setContent('abv');
$history->push($editor->createState());

$editor->setContent('this liner should be retored !');
$history->push($editor->createState());

$editor->setContent('zxfvzxcv');
$editor->restore($history->restore());

echo $editor->getContent();