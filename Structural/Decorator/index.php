<?php
namespace DesignPatternsInPHP\Structural\Decorator;
require_once __DIR__.'/../../vendor/autoload.php';

$form = new MyForm();
$form = new TextField($form);
$form = new Select($form);
$form = new TextField($form);

echo $form->toString();