<?php

namespace DesignPatternsInPHP\Behavioral\Specification;

interface SpecificationInterface
{
    public function isSatisfiedBy($data): bool;
}