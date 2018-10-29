<?php
namespace DesignPatternsInPHP\Creational\AbstractFactory;

class RedisUserFactory implements UserFactory {

    public function build ($userId, $email, $password) {
        return 'An object persisted in memory';
    }

}
