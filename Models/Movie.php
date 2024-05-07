<?php
class Movie{
    public $title;
    public $id;
    public function __construct($title, $id){
        $this->title = $title;
        $this->id = $id;
    }
};
