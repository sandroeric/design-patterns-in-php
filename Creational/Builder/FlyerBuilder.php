<?php

namespace DesignPatternsInPHP\Creational\Builder;

class FlyerBuilder implements BuilderInterface
{
    private $character;

    public function addPowers()
    {
        $this->character->setPart('to-run', new Power());
        $this->character->setPart('to-fly', new Power());
        $this->character->setPart('to-fight', new Power());
    }

    public function addLife()
    {
        $this->character->setPart('life-5', new Life());
    }

    public function addImage()
    {
        $this->character->setPart('image-63', new Image());
    }

    public function createCharacter()
    {
        $this->character = new Flyer();
    }

    public function getCharacter(): Character
    {
        return $this->character;
    }
}