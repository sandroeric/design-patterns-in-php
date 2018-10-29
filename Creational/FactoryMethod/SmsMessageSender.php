<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

class SmsMessageSender implements MessageSender {

    public function send($message) {
        echo "Sending a SMS message...";
        exit;
    }
}
