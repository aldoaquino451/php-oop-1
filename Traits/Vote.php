<?php

trait Vote {

  public $vote;

  public function getVote()
  {
    if ($this->vote > 0 && $this->vote < 100) {
      return "Voto : " . $this->vote / 10 . " / 10";
    } 
    else {
      throw new Exception("Il numero deve essere compreso tra 0 e 100");
    }
  }
}