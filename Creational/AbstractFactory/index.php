<?php

namespace DesignPatternsInPHP\Creational\AbstractFactory;
require_once __DIR__.'/../../vendor/autoload.php';

$doctrine_user_factory = new DoctrineUserFactory();
?>
<pre>
<?php var_dump($doctrine_user_factory->build(time(), 'sandro@eric.com', 'passwd')); ?>
</pre>