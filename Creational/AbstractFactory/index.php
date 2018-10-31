<?php

namespace DesignPatternsInPHP\Creational\AbstractFactory;
require_once __DIR__.'/../../vendor/autoload.php';

$doctrineUserFactory = new DoctrineUserFactory();
?>
<pre>
<?php var_dump($doctrineUserFactory->build(time(), 'sandro@eric.com', 'passwd')); ?>
</pre>