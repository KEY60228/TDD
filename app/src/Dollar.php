<?php

namespace Money;

class Dollar extends Money {
  public function __construct($amount, $currency) {
    $this->amount = $amount;
    $this->currency = $currency;
  }

  public function times($multiplier): Money {
    return Money::dollar($this->amount * $multiplier);
  }
}