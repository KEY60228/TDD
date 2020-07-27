<?php

namespace Money;

class Franc extends Money {
  public function __construct($amount, $currency) {
    $this->amount = $amount;
    $this->currency = $currency;
  }

  public function times($multiplier): Money {
    return Money::franc($this->amount * $multiplier);
  }
}