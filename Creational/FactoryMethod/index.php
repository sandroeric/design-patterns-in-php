<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;
require_once __DIR__.'/../../vendor/autoload.php';

$smsSenderFactory = new SmsMessageSenderFactory();

$sms_sender = $smsSenderFactory->create();

$sms_sender->send('ok');