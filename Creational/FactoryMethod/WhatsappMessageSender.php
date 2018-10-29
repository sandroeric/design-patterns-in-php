<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

class WhatsappMessageSender implements MessageSender {

    public function send($message) {
        echo "Sending a Whatsapp message...";
        exit;
    }
}