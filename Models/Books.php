<?php
include_once __DIR__ . '/Product.php';
class Books extends Product{
    public string $authors;
    public string $category;
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
$booksdb=[
    new Books ('Flex on Java', 'A beautifully written book that is a must have for every Java Developer', 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/allmon.jpg', '"Bernerd Allmon", "Jeremy Anderson"', 'Internet'),
    new Books ('MongoDB in Action', 'MongoDB In Action is a comprehensive guide to MongoDB for application developers. The book begins by explaining what makes MongoDB unique and describing its ideal use cases.', 'https://s3.amazonaws.com/AKIAJC5RLADLUMVRPFDQ.book-thumb-images/banker.jpg', 'Kyle Banker', 'Next Generation Databases')
];