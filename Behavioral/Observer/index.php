<?php
namespace DesignPatternsInPHP\Behavioral\Observer;
require_once __DIR__.'/../../vendor/autoload.php';
try {
$observer = new Observer();

$observed = new Observed();
$observed->attach($observer);

$observed->changeProperty('new value on it');
var_dump($observer->getChangedObjects());
} catch (Exception $e) {
    var_dump($e); exit;
}