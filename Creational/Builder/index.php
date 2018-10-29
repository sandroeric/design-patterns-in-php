<?php

namespace DesignPatternsInPHP\Creational\Builder;
require_once __DIR__.'/../../vendor/autoload.php';

$flyer_builder = new FlyerBuilder();
$new_character = (new Director())->build($flyer_builder);
?>
<pre>
<?php var_dump($new_character); ?>
</pre>