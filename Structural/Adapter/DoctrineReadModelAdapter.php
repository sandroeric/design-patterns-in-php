<?php
namespace DesignPatternsInPHP\Structural\Adapter;

class DoctrineReadModelAdapter implements ReadModelInterface {
    
    private $doctrineReadModel;
    
    public function __construct(DoctrineReadModel $doctrine_real_model) {
        $this->doctrineReadModel = new $doctrine_real_model();
    }
    
    public function findAll() {
        return $this->doctrineReadModel->findAll();
    }
    
    public function findByPk($pk) {
        return $this->doctrineReadModel->find($pk);
    }
    
    public function findByField($fieldName, $fieldValue) {
        return $this->doctrineReadModel->findBy([ $fieldName => $fieldValue]);
    }
}
