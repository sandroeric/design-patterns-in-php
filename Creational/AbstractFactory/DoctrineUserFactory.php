<?php
namespace DesignPatternsInPHP\Creational\AbstractFactory;

class DoctrineUserFactory implements UserFactory {

    public function build ($userId, $email, $password) {
        return 'An object persisted with doctrine';
    }

}
