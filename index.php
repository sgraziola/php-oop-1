<!--
DESCRIZIONE: 
    definiamo una classe ‘Movie’
    all'interno della classe sono dichiarate delle variabili d'istanza
    all'interno della classe è definito un costruttore
    all'interno della classe è definito almeno un metodo
    vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

Bonus 1:
    Modificare la classe Movie in modo che accetti piú di un genere.

Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies. 
-->

<?php
class Movie
{
    public $title;
    public $release_date;
    public $language;
    public $vote;
    public $overview;
    public $rating = "";
    public $category_rate;

    public function __construct($title, $release_date, $category_rate)
    {
        $this->title = $title;
        $this->release_date = $release_date;
        $this->category_rate = $category_rate;
        $this->rating = $this->getRating();
    }

    public function setRating($category_rate)
    {
        if ($category_rate === "6+") {
            $this->rating = "Sconsigliato ai minori di anni 6";
        } elseif ($category_rate === "14+") {
            $this->rating = "Vietato ai minori di 14 anni";
        } elseif ($category_rate === "18+") {
            $this->rating = "Vietato ai minori di 18 anni";
        } elseif ($category_rate === "T") {
            $this->rating = "Film per tutti";
        }
    }

    public function getRating()
    {
        return $this->rating;
    }
}

$matrix = new Movie("Matrix", "1999", "T");

//$matrix->setRating("T");
var_dump($matrix);
