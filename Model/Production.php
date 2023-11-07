<?php

class Production
{
  public $title;
  public $casts;
  public $vote;
  public function __construct(string $_title, array $_casts, int $_vote)
  {
    $this->title = $_title;
    $this->casts = $_casts;
    $this->vote = $_vote;
  }

  public function getVote()
  {
    return $this->vote / 10;
  }

}
;
