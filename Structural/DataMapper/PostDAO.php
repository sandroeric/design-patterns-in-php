<?php

namespace DesignPatternsInPHP\Structural\DataMapper;

class PostDAO {
    
    private $storage;
    private $title;
    private $body;

    public function __construct(Post $post) 
    {
        $this->storage = new StorageAdapter();
        $this->title = $post->title();
        $this->body = $post->body();
    }

    public function save() 
    {
        $this->storage->insert([ 
            'title' => $this->title,
            'body' => $this->body
        ]);
    }
    
    public static function findOneBy($params) 
    {
        $storage = new StorageAdapter();
        $postArray = $storage->select($params);
        return new Post($postArray['title'], $postArray['body']);
    }
}
