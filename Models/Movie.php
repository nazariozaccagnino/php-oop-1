<?php
include __DIR__ . '/Product.php';
class Movie extends Product{
    public string $voteavg;
    public function __construct($title, $desc, $img, $voteavg){
        $this->voteavg= $voteavg;
        parent::__construct($title, $desc, $img);
    }
    public function printMovie(){
        echo $this->title . ' is in the class with the vote: ' . $this->voteavg;
    }
};

//$fast = new Movie('Fast and Furious', 100);
//echo $fast->printMovie();

// $bond = new Movie('007: Licenza di uccidere', 101);
// echo $bond->printMovie();
