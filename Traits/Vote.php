<?php

trait Vote {

  public $vote;

  public function getVote()
  {
    return "Voto : " . $this->vote / 10 . " / 10";
  }
}