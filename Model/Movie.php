<?php

class Movie extends Production
{

  public $published_year; // anno pubblicazione
  public $running_time; // durata in minuti

  public function _construct(string $_title, array $_casts, int $_vote, int $_published_year, int $_running_time)
  {
    $this->published_year = $_published_year;
    $this->running_time = $_running_time;

    parent::__construct($_title, $_casts, $_vote); // parametri del construct genitore
  }

}