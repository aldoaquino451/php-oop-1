<?php

class Movie
{
  public $title;
  public $genre;
  public $vote;

  public function __construct(string $_title, string $_genre, float $_vote)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    $this->vote = $_vote;
  }

  public function getVote()
  {
    return $this->vote = '5 stelle';
  }

}

$inglouriousBasterds = new Movie('Bastardi senza gloria', 'Guerra', 9.3);
$pulpFiction = new Movie('Pulp Fiction', 'Gangster', 9.1);

var_dump($inglouriousBasterds, $pulpFiction);