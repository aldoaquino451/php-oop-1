<?php

trait Position {

  public $lat;
  public $lng;
  
  public function getPosition()
  {
    return "$this->lat and $this->lng";
  }
}