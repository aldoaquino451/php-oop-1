<?php

class Movie
{
  public $title;
  public $genres;
  public $vote;
  public function __construct(string $_title, array $_genres, int $_vote)
  {
    $this->title = $_title;
    $this->genres = $_genres;
    $this->vote = $_vote;
  }

  public function getVote()
  {
    return $this->vote / 10;
  }

  // public function addGenre($_newGenre)
  // {
  //   $this->genre[] = $_newGenre;
  // }
  // public function removeGenre($_newGenre)
  // {
  //   $indexToDelete = array_search($_newGenre, $this->genre);
  //   if ($indexToDelete !== false) {
  //     array_splice($this->genre, $indexToDelete, 1);
  //   }
  // }


}
;
