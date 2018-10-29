<?php
namespace DesignPatternsInPHP\Creational\FactoryMethod;

class SmsMessageSenderFactory implements MessageSenderFactory
{
    public function create(): MessageSender
    {
        return new SmsMessageSender();
    }
}