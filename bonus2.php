<?php

require __DIR__ . '/db.php';

$moviesArray = [$matrix, $signoreDegliAnelli];


?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MOVIE</title>
</head>

<body>
    <?php
    foreach ($moviesArray as $movie) {
        echo "<h1 style='text-align: center'> Titolo: " . $movie->title . "</h1>";
        echo "<h2 style='text-align: center'> Anno di Uscita: " . $movie->release_date . "</h2>";
        echo "<h2 style='text-align: center'> Classificazione: " . $movie->rating . "</h2>";
    }
    ?>
</body>

</html>