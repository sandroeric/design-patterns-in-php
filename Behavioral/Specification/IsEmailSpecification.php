<?php

namespace DesignPatternsInPHP\Behavioral\Specification;

class IsEmailSpecification implements SpecificationInterface
{
    public function isSatisfiedBy($text): bool
    {
        $text_parts = explode('@', $text);
        if (count($text_parts) === 2 && strlen($text_parts[0]) > 0 && strlen($text_parts[1]) >= 3 && strpos($text_parts[1], '.') !== false) {
            return true;
        }
        return false;
    }
}