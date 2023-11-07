<?php

class Production
{
  public $title;
  public $casts;
  public $vote;
  public $image;

  public function __construct(string $_title, array $_casts, int $_vote, string $_image)
  {
    $this->title = $_title;
    $this->casts = $_casts;
    $this->vote = $_vote;
    $this->image = $_image;
  }

  public function getVote()
  {
    return $this->vote / 10;
  }

  public function getImage()
  {
    return "./img/$this->image";
  }

}
;