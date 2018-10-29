<?php

namespace DesignPatternsInPHP\Creational\Builder;

interface BuilderInterface
{
    public function createCharacter();

    public function addPowers();

    public function addLife();

    public function addImage();

    public function getCharacter(): Character;
}