<?php
namespace DesignPatternsInPHP\Structural\Adapter;

class DoctrineReadModelAdapter implements ReadModelInterface {
    
    private $doctrineReadModel;
    
    public function __construct(DoctrineReadModel $doctrineRealModel) {
        $this->doctrineReadModel = new $doctrineRealModel();
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
