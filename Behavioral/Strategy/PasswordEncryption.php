<?php
namespace DesignPatternsInPHP\Behavioral\Strategy;

interface PasswordEncryption {
    public function verify($hash, $plain_password): bool;
}