<?php

namespace DesignPatternsInPHP\Behavioral\Observer;

class Observer implements \SplObserver {

    private $changedObjects = [];

    public function update(\SplSubject $subject) {
        $this->changedObjects[] = clone $subject;
    }

    public function getChangedObjects(): array {
        return $this->changedObjects;
    }

}
