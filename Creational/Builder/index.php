<?php

namespace DesignPatternsInPHP\Creational\Builder;
require_once __DIR__.'/../../vendor/autoload.php';

$flyerBuilder = new FlyerBuilder();
$newCharacter = (new Director())->build($flyerBuilder);
?>
<pre>
<?php var_dump($newCharacter); ?>
</pre>