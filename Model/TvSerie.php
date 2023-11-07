<?php

class TvSerie extends Production
{

  public $aired_from_year; // anno first
  public $aired_to_year; // anno last
  public $number_of_episodes; // number ep
  public $number_of_seasons; // number season

  public function __construct(string $_title, array $_casts, int $_vote, int $_aired_from_year, int $_aired_to_year, int $_num_of_episodes, int $_num_of_seasons)
  {
    $this->aired_from_year = $_aired_from_year;
    $this->aired_to_year = $_aired_to_year;
    $this->number_of_episodes = $_num_of_episodes;
    $this->number_of_seasons = $_num_of_seasons;

    parent::__construct($_title, $_casts, $_vote); // parametri del construct genitore
  }
}