<?php

class Counter {

    protected $counter;
  
    public function __construct() {
  
      $this->counter = 0;
    }
  
    public function getCounterIncrement() {
  
      return $this->counter++;
    }
}