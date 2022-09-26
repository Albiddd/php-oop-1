<?php
include_once __DIR__ . '/classes/Movie.php';

$ilPadrino = new Movie('Il Padrino', 'Francis Ford Coppola', 1972, 'Crime', 2.55);
$JohnWick4 = new Movie('John Wick 4', 'Chad Stahelski', 2023, 'Azione', '');
$whiplash = new Movie('Whiplash','Damien Chazelle', 2015, 'Dramma', 1.47 );

// var_dump($ilPadrino);
// var_dump($JohnWick4);
// var_dump($whiplash);

$movies = [$ilPadrino, $JohnWick4, $whiplash];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">

    <div class="card-wrapper">    

            <?php
                foreach($movies as $movie){
                ?>
                <div class="card">
                    <h2><?= $movie->title ?></h2>
                    <p><strong>Anno:</strong> <?= $movie->year ?></p>
                    <p><strong>Genere:</strong> <?= $movie->genre ?></p>
                    <p><strong>Durata:</strong> <?= $movie->duration ?></p>
                    <h5><?= $movie->director ?></h5>
                </div>
                <?php
                }
                ?>
    </div>

</div>

</body>
</html>