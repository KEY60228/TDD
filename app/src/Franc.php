<?php

namespace Money;

class Franc {
  private $amount;

  public function __construct($amount) {
    $this->amount = $amount;
  }

  public function times($multiplier) {
    return new Franc($this->amount * $multiplier);
  }

  public function equals($object) {
    $franc = $object;
    return $this->amount == $franc->amount;
  }
}