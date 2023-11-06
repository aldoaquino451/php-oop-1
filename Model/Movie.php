<?php

class Movie
{
  public $title;
  public $description;
  public $genre;
  public $vote;

  public function __construct(string $_title, string $_description, array $_genre, float $_vote)
  {
    $this->title = $_title;
    $this->description = $_description;
    $this->genre = $_genre;
    $this->vote = $_vote;
  }

  public function getVote()
  {
    return $this->vote = '5 stelle';
  }

}
