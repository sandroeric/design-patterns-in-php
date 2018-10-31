<?php

namespace DesignPatternsInPHP\Behavioral\Specification;

class Data {

    private $field1;
    private $field2;

    public function __construct(int $field1, string $field2) 
    {
        $this->field1 = $field1;
        $this->field2 = $field2;
    }

    public function field1(): float 
    {
        return $this->field1;
    }
    
    public function field2(): string 
    {
        return $this->field2;
    }

}
