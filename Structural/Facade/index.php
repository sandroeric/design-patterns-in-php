<?php
namespace DesignPatternsInPHP\Structural\Facade;

require_once __DIR__.'/../../vendor/autoload.php';

$client = new Client();
$address = new Address();
$billing = new Billing();

$facade = new Facade($client, $address, $billing);
$facade->insertClient();