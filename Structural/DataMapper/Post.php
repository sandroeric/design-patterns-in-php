<?php
namespace DesignPatternsInPHP\Structural\DataMapper;

class Post {

    private $title;
    private $body;

    public function __construct(string $title, string $body) {
        $this->title = $title;
        $this->body = $body;
    }

    public function title() {
        return $this->title;
    }

    public function body() {
        return $this->body;
    }

}
