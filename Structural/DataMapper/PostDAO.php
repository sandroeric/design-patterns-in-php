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
        $post_array = $storage->select($params);
        return new Post($post_array['title'], $post_array['body']);
    }
}
