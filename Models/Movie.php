<?php
include __DIR__ . '/Product.php';
class Movie extends Product{
    public string $voteavg;
    public function __construct($title, $desc, $img, $voteavg){
        $this->voteavg= $voteavg;
        parent::__construct($title, $desc, $img);
    }
    public function printMovie(){
        echo $this->title . ' is in the class with the vote: ' . $this->voteavg . ' and with description: ' . $this->desc;
    }
};

//$fast = new Movie('Fast and Furious', 100);
//echo $fast->printMovie();

// $bond = new Movie('007: Licenza di uccidere', 101);
// echo $bond->printMovie();
$moviesdb =[
    new Movie ('Miraculous World: Paris, Tales of Shadybug and Claw Noir', 'Miraculous holders from another world appear in Paris. They come from a parallel universe where everything is reversed..', 'https://image.tmdb.org/t/p/w342/5Di2tovzn8lnXWxigV6xm7yrL24.jpg', '6.935'),
    new Movie ('Spider-Man: Across the Spider-Verse', 'After reuniting with Gwen Stacy, Brooklyn’s full-time, friendly neighborhood Spider-Man is catapulted across the Multiverse, where he encounters the Spider Society, a team of Spider-People charged with protecting the Multiverse’s very existence', 'https://image.tmdb.org/t/p/w342/8Vt6mWEReuy4Of61Lnj5Xj704m8.jpg', '8.4')
    
];
