<?php
namespace DesignPatternsInPHP\Behavioral\Strategy;

require_once __DIR__ . '/../../vendor/autoload.php';

$password_encryption = new MD5PasswordEncryption();
$sign_in_service = new SignIn($password_encryption);
var_dump($sign_in_service->execute('admin', 'admin'));