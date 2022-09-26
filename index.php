<?php
class Movie
{
    public $title;
    public $director;
    public $year;
    public $genre;
    public $duration;

    public function __construct($title, $director, $year, $genre, $duration)
    {
        $this->title = $title;
        $this->director = $director;
        $this->setYear($year);
        $this->genre = $genre;
        $this->setDuration($duration);
    }

    public function setYear($year){
        if($year <= date("Y"))
            $this->year = $year;
        else
            $this->year = 'Coming soon' ;
    }

    public function setDuration($duration){
        if(is_numeric($duration) )
            $this->duration = $duration;
        else
            $this->duration = 'Non ancora definita' ;
    }
} 

$ilPadrino = new Movie('Il Padrino', 'Francis Ford Coppola', 1972, 'Crime', 2.55);
$JohnWick4 = new Movie('John Wick 4', 'Chad Stahelski', 2023, 'Azione', '');
$whiplash = new Movie('Whiplash','Damien Chazelle', 2015, 'Dramma', 1.47 );

var_dump($ilPadrino);
var_dump($JohnWick4);
var_dump($whiplash);
