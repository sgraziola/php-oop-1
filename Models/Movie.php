<?php

class Movie
{
    //Variabili
    public $title;
    public $release_date;
    public $language;
    public $vote;
    public $overview;
    public $rating = "";
    public $category_rate;
    public $genres = [];

    //Costruttore
    public function __construct($title, $release_date, $category_rate)
    {
        $this->title = $title;
        $this->release_date = $release_date;
        $this->category_rate = $category_rate;
        $this->setRating($category_rate);
    }

    //Metodo che restituisce il rating
    //Setter
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
    //Getter
    public function getRating()
    {
        return $this->rating;
    }

    //Bonus 1
    public function addGenre($genre)
    {
        if (!in_array($genre, $this->genres)) {
            $this->genres[] = $genre;
        }
    }
}
