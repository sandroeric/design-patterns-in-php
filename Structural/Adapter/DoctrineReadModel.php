<?php
namespace DesignPatternsInPHP\Structural\Adapter;

class DoctrineReadModel {
    public function findAll() {
        return 'doctrine has one method called findAll';
    }
    
    public function find($params) {
        return 'doctrine has one method called find';
    }
    
    public function findBy($params) {
        return 'all elements founded by field name and value';
    }
}
