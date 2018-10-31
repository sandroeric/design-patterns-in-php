<?php

namespace DesignPatternsInPHP\Behavioral\Observer;

class Observed implements \SplSubject {

    private $property;
    private $observers;

    public function __construct() {
        $this->observers = new \SplObjectStorage();
    }

    public function attach(\SplObserver $observer) {
        $this->observers->attach($observer);
    }

    public function detach(\SplObserver $observer) {
        $this->observers->detach($observer);
    }

    public function changeProperty(string $property) {
        $this->property = $property;
        $this->notify();
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

}
