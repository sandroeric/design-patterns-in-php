<?php
namespace DesignPatternsInPHP\Structural\Adapter;

class ReadModel implements ReadModelInterface {
    public function findAll() {
        return 'all elements';
    }
    
    public function findByPk($pk) {
        return 'one element founded by pk';
    }
    
    public function findByField($fieldName, $fieldValue) {
        return 'one element founded by field name and value';
    }
}
