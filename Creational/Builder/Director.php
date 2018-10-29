<?php

namespace DesignPatternsInPHP\Creational\Builder;

class Director
{
    public function build(BuilderInterface $builder)
    {
        $builder->createCharacter();
        $builder->addPowers();
        $builder->addLife();
        $builder->addImage();

        return $builder->getCharacter();
    }
}
