<?php

namespace DesignPatternsInPHP\Behavioral\Specification;

class IsEmailSpecification implements SpecificationInterface
{
    public function isSatisfiedBy($text): bool
    {
        $textParts = explode('@', $text);
        if (count($textParts) === 2 && strlen($textParts[0]) > 0 && strlen($textParts[1]) >= 3 && strpos($textParts[1], '.') !== false) {
            return true;
        }
        return false;
    }
}