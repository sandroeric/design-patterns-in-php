<?php

namespace DesignPatternsInPHP\Structural\DataMapper;

class StorageAdapter {
    
    private $db;

    public function __construct() 
    {
        date_default_timezone_set('UTC');
        $this->db = new \PDO('sqlite:blog.sqlite3');

        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);

        $this->db->exec("CREATE TABLE IF NOT EXISTS posts (
                    id INTEGER PRIMARY KEY, 
                    title TEXT, 
                    body TEXT)");
    }

    public function insert($row) 
    {
        $insert = "INSERT INTO posts (title, body) 
                VALUES (:title, :body)";
        $stmt = $this->db->prepare($insert);

        $stmt->bindParam(':title', $row['title']);
        $stmt->bindParam(':body', $row['body']);
        $stmt->execute();
    }
    
    public function select($params) 
    {
        $string = 'SELECT * FROM posts WHERE 1=1';
        foreach($params as $key => $value) {
            $string .= ' AND '.$key. " = '".$value."'";
        }
        $string .= ' LIMIT 1';
        return $this->db->query($string)->fetch();
    }

}
