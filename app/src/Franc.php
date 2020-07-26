<?php

namespace Money;

class Franc extends Money {
  public function __construct($amount) {
    $this->amount = $amount;
  }

  public function times($multiplier): Money {
    return new Franc($this->amount * $multiplier);
  }
}