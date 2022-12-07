<?php

/* DESCRIZIONE: 
    definiamo una classe ‘Movie’
    all'interno della classe sono dichiarate delle variabili d'istanza
    all'interno della classe è definito un costruttore
    all'interno della classe è definito almeno un metodo
    vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1:
    Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.  */


require __DIR__ . '/Models/Movie.php';

$matrix = new Movie("Matrix", "1999", "14+");
$signoreDegliAnelli = new Movie("The Lord of the Rings: The Fellowship of the Ring", "2001", "T");

var_dump($matrix);
var_dump($signoreDegliAnelli);

//Bonus:1
$signoreDegliAnelli->addGenre("Avventura");
$signoreDegliAnelli->addGenre("Fantastico");
$signoreDegliAnelli->addGenre("Azione");
$signoreDegliAnelli->addGenre("Epico");

var_dump($signoreDegliAnelli);
