<?php

namespace DesignPatternsInPHP\Behavioral\Specification;

class GreaterThanSpecification implements SpecificationInterface
{
    private $minValue;
    
    public function __construct($minValue)
    {
        $this->minValue = $minValue;
    }

    public function isSatisfiedBy($value): bool
    {
        if ($value > $this->minValue) {
            return true;
        }
        return false;
    }
}