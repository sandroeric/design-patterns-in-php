<?php
namespace DesignPatternsInPHP\Structural\DataMapper;
require_once __DIR__.'/../../vendor/autoload.php';

$post = new Post('My title', 'what a text!');

$dao = new PostDAO($post);
$dao->save();

$persistedPost = PostDAO::findOneBy([ 'title' => 'My title']);

var_dump($persistedPost, $post);