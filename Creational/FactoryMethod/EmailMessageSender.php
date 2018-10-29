<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

class EmailMessageSender implements MessageSender {

    public function send($message) {
        echo "Sending a email message...";
        exit;
    }
}