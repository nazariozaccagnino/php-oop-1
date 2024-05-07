<?php
class Movie{
    public $title;
    public $id;
    public function __construct($title, $id){
        $this->title = $title;
        $this->id = $id;
    }
    public function printMovie(){
        echo $this->title . ' is in the class with the id: ' . $this->id;
    }
};

$fast = new Movie('Fast and Furious', 100);
echo $fast->printMovie();

$bond = new Movie('007: Licenza di uccidere', 101);
echo $bond->printMovie();