<?php

namespace DesignPatternsInPHP\Behavioral\Specification;

require_once __DIR__ . '/../../vendor/autoload.php';

$data = new Data(3, 'sandro@test.com');

$great_than_spec = new GreaterThanSpecification(2);
$less_than_spec = new LessThanSpecification(18);
$field1_spec = new AndSpecification([ $great_than_spec, $less_than_spec ], 'field1');

$string_size_spec = new StringSizeSpecification(15, 220);
$is_email_spec = new IsEmailSpecification();
$field2_spec = new AndSpecification([ $is_email_spec, $string_size_spec ], 'field2');

$isField1Valid = $field1_spec->isSatisfiedBy($data);
$isField2Valid = $field2_spec->isSatisfiedBy($data);

var_dump($isField1Valid, $isField2Valid);