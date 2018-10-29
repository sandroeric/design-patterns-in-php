<?php
namespace DesignPatternsInPHP\Creational\FactoryMethod;

class EmailMessageSenderFactory implements MessageSenderFactory
{
    public function create(): MessageSender
    {
        return new EmailMessageSender();
    }
}