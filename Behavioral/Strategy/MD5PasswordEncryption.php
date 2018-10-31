<?php
namespace DesignPatternsInPHP\Behavioral\Strategy;

class MD5PasswordEncryption implements PasswordEncryption {
    
    public function verify($hash, $plain_password) : bool
    {
        return $hash === md5($plain_password);
    }
}