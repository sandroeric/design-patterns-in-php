<?php
namespace DesignPatternsInPHP\Creational\AbstractFactory;

interface UserFactory
{
    
public function build ($userId, $email, $password);

}