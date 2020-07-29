<?php

namespace Money;

class Dollar extends Money {
  public function __construct($amount, $currency) {
    parent::__construct($amount, $currency);
  }

  public function times($multiplier): Money {
    return new Dollar($this->amount * $multiplier, $this->currency);
  }
}