<?php

namespace DesignPatternsInPHP\Behavioral\Specification;

class AndSpecification implements SpecificationInterface {

    private $specifications;
    private $property;

    public function __construct($specifications, string $property)
    {
        $this->specifications = $specifications;
        $this->property = $property;
    }

    public function isSatisfiedBy($data): bool
    {
        $property = $this->property;
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($data->$property())) {
                return false;
            }
        }

        return true;
    }
}