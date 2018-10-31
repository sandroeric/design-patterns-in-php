<?php
namespace DesignPatternsInPHP\Structural\Adapter;
require_once __DIR__.'/../../vendor/autoload.php';

$doctrineReadModel = new DoctrineReadModel();
$read_model = new DoctrineReadModelAdapter($doctrineReadModel);
?>
<?=$read_model->findAll()?><br>
<?=$read_model->findByField('created_at', date('Y-m-d'))?><br>
<?=$read_model->findByPk(2)?><br>