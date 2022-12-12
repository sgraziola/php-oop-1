<?php

require_once __DIR__ . '/Models/Movie.php';

$matrix = new Movie("Matrix", "1999", "14+");
$signoreDegliAnelli = new Movie("The Lord of the Rings: The Fellowship of the Ring", "2001", "T");
$moviesArray = [$matrix, $signoreDegliAnelli];


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MOVIE</title>
    <style>
        h1,
        h2 {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    if (count($moviesArray) > 0) {

        foreach ($moviesArray as $movie) {
            echo "<h1> Titolo: " . $movie->title . "</h1>";
            echo "<h2> Anno di Uscita: " . $movie->release_date . "</h2>";
            echo "<h2> Classificazione: " . $movie->rating . "</h2>";
        }
    }
    ?>
</body>

</html>