<?php
//require 'post.php';

class PostLoader
{
    public function loadPosts () : array {
        $form = [];
        $json = json_decode(file_get_contents('posts.json'), true);
        foreach ($json AS $postJson) {
            $form [] = new Post($postJson['date'], $postJson['title'],
                $postJson['message'], $postJson['author']);
        }
        return $form;
    }
}