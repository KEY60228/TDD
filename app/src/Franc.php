<?php

namespace Money;

class Franc extends Money {
  public function __construct($amount, $currency) {
    parent::__construct($amount, $currency);
  }

  public function times($multiplier): Money {
    return Money::franc($this->amount * $multiplier);
  }
}