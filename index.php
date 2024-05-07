<?php
include __DIR__ . '/Models/Movie.php';
include __DIR__ . '/Models/Books.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://unpkg.com/axios@1.6.7/dist/axios.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="js/script.js" type="module"></script>

    <title>PHP-OOP-1</title>
</head>

<body>
    <div class="container">
        <div class="text-center"><h1>Movies and Books</h1></div>
        <div>
            <h1>Movies</h1>
            <div class='d-flex'>
                <?php foreach ($moviesdb as $movies) {?>
                
                <div class="card mx-2" style="width: 18rem;">
                    <img src="<?= $movies->img ?>" class="card-img-top" alt="<?= $movies->title?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $movies->title?></h5>
                        <p class="card-text"><?= $movies->desc?></p>
                        <p class="card-text fw-bold">Average vote: <?= $movies->voteavg?></p>

                    </div>
                </div>
                <?php }?>
            </div>

        </div>
        <div>
            <h1>Books</h1>
            <div class='d-flex'>
                <?php foreach ($booksdb as $books) {?>
                
                <div class="card mx-2" style="width: 18rem;">
                    <img src="<?= $books->img ?>" class="card-img-top" alt="<?= $books->title?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $books->title?></h5>
                        <p class="card-text"><?= $books->desc?></p>
                        <p class="card-text fst-italic">Authors: <?= $books->authors?></p>
                        <p class="card-text fw-bold">Category: <?= $books->category?></p>


                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</body>

</html>