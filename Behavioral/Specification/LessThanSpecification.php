<?php

namespace DesignPatternsInPHP\Behavioral\Specification;

class LessThanSpecification implements SpecificationInterface
{
    private $maxValue;
    
    public function __construct($maxValue)
    {
        $this->maxValue = $maxValue;
    }

    public function isSatisfiedBy($value): bool
    {
        if ($value < $this->maxValue) {
            return true;
        }
        return false;
    }
}