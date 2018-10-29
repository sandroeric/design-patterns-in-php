<?php

namespace DesignPatternsInPHP\Creational\FactoryMethod;

interface MessageSenderFactory
{
    public function create(): MessageSender;
}