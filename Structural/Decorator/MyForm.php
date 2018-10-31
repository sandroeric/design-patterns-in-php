<?php
namespace DesignPatternsInPHP\Structural\Decorator;
class MyForm implements Form {
    
    public function toString() {
        return '<form></form>';
    }
    
}