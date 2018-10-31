<?php

namespace DesignPatternsInPHP\Behavioral\Specification;

class StringSizeSpecification implements SpecificationInterface
{
    private $minSize;
    private $maxSize;
    
    public function __construct($minSize, $maxSize)
    {
        $this->minSize = $minSize;
        $this->maxSize = $maxSize;
    }

    public function isSatisfiedBy($text): bool
    {
        if (strlen($text) <= $this->maxSize && strlen($text) >= $this->minSize) {
            return true;
        }
        return false;
    }
}