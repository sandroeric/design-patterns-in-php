<?php
namespace DesignPatternsInPHP\Behavioral\Strategy;

class SignIn {
    
    private $users = [
        'admin' => '21232f297a57a5a743894a0e4a801fc3', //md5 hash for admin
        'guest' => '084e0343a0486ff05530df6c705c8bb4' //md5 hash for guest
    ];
    
    private $password_encryption;
    
    public function __construct(PasswordEncryption $password_encryption) 
    {
        $this->password_encryption = $password_encryption;
    }
    
    public function execute($username, $plain_password)
    {
        if($this->verifyPassword($this->users[$username], $plain_password)){
            return [
                'username' => $username,
                'status' => 'logado'
            ];
        }
        return false;
    }
    
    private function verifyPassword($hash, $plain_password)
    {
        return $this->password_encryption->verify($hash, $plain_password);
    }
}
