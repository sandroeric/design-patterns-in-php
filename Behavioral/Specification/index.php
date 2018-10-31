<?php

namespace DesignPatternsInPHP\Behavioral\Specification;

require_once __DIR__ . '/../../vendor/autoload.php';

$data = new Data(3, 'sandro@test.com');

$greatThanSpec = new GreaterThanSpecification(2);
$lessThanSpec = new LessThanSpecification(18);
$field1Spec = new AndSpecification([ $greatThanSpec, $lessThanSpec ], 'field1');

$stringSizeSpec = new StringSizeSpecification(15, 220);
$isEmailSpec = new IsEmailSpecification();
$field2Spec = new AndSpecification([ $isEmailSpec, $stringSizeSpec ], 'field2');

$isField1Valid = $field1Spec->isSatisfiedBy($data);
$isField2Valid = $field2Spec->isSatisfiedBy($data);

var_dump($isField1Valid, $isField2Valid);