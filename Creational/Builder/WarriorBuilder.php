<?php

namespace DesignPatternsInPHP\Creational\Builder;

class WarriorBuilder implements BuilderInterface
{
    private $character;

    public function addPowers()
    {
        $this->character->setPart('to-run', new Power());
        $this->character->setPart('to-fight', new Power());
    }

    public function addLife()
    {
        $this->character->setPart('life-3', new Life());
    }

    public function addImage()
    {
        $this->character->setPart('image-55', new Image());
    }

    public function createCharacter()
    {
        $this->character = new Warrior();
    }

    public function getCharacter(): Character
    {
        return $this->character;
    }
}