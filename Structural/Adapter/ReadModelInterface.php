<?php
namespace DesignPatternsInPHP\Structural\Adapter;

interface ReadModelInterface
{
    public function findAll();
    public function findByPk($pk);
    public function findByField($fieldName, $fieldValue);
}