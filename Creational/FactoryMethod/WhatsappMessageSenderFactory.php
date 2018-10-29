<?php
namespace DesignPatternsInPHP\Creational\FactoryMethod;

class WhatsappMessageSenderFactory implements MessageSenderFactory
{
    public function create(): MessageSender
    {
        return new WhatsappMessageSender();
    }
}