<?php
include __DIR__ . '/Models/Product.php';


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
        <!-- <div>
            <?php
            $fast = new Movie('Fast and Furious', 100);
            echo $fast->printMovie();
            ?>
        </div>
        <div>
            <?php
            $bond = new Movie('007: Licenza di uccidere', 101);
            echo $bond->printMovie();
            ?>
        </div> -->
        <div>
            <?php
                $miracworld= new Movie ('Miraculous World: Paris, Tales of Shadybug and Claw Noir', 'Miraculous holders from another world appear in Paris. They come from a parallel universe where everything is reversed: the holders of Ladybug and Black Cat Miraculouses, Shadybug and Claw Noir, are the bad guys, and the holder of the Butterfly Miraculous, Hesperia, is a superhero. Ladybug and Cat Noir will have to help Hesperia counter the attacks of their evil doubles and prevent them from seizing the Butterfly\'s Miraculous. Can our heroes also help Hesperia make Shadybug and Claw Noir better people?', 'https://image.tmdb.org/t/p/w342/5Di2tovzn8lnXWxigV6xm7yrL24.jpg', '6.935');
                echo $miracworld->title
            ?>
        </div>
    </div>
</body>

</html>