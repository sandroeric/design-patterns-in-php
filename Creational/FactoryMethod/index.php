<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;
require_once __DIR__.'/../../vendor/autoload.php';

$sms_sender_factory = new SmsMessageSenderFactory();

$sms_sender = $sms_sender_factory->create();

$sms_sender->send('ok');