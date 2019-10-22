<?php


class Post
{

    private $title;
    private $date;
    private $content;
    private $authorName;

    public function __construct(string $_date, string $_title,  string $_content, string $_authorName)
    {
        $this->title = $_title;
        $this->date = $_date;
        $this->content = $_content;
        $this->authorName = $_authorName;
    }

    public function getTitle () : string {
        //the getter
        return $this->title;
    }

    public function getDate () : string {
        //the getter
        return $this->date;
    }

    public function getContent () : string {
        //the getter
        return $this->content;
    }

    public function getAuthorName () : string {
        //the getter
        return $this->authorName;
    }

}