<?php
include __DIR__ . '/Product.php';
class Books extends Product{
    public array $authors;
    public array $category;
    public function __construct($title, $desc, $img, $authors, $category){
        $this->authors= $authors;
        $this->category= $category;
        parent::__construct($title, $desc, $img);
    }
    public function printBook(){
        echo $this->title . ' is in the class with the category: ' . $this->category . ' and written by: ' . $this->authors;
    }
};

//$fast = new Movie('Fast and Furious', 100);
//echo $fast->printMovie();

// $bond = new Movie('007: Licenza di uccidere', 101);
// echo $bond->printMovie();
$flexonjava= new Books ('Flex on Java', 'A beautifully written book that is a must have for every Java Developer', 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/allmon.jpg', ["Bernerd Allmon", "Jeremy Anderson"], ["Internet"]);