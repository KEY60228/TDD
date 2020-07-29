<?php

namespace Money;

class Money {
  protected $amount;
  protected $currency;

  public function __construct($amount, $currency) {
    $this->amount = $amount;
    $this->currency = $currency;
  }

  function times($multiplier) {
    return null;
  }

  public function currency() {
    return $this->currency;
  }

  public function equals($object) {
    $money = $object;
    return $this->amount == $money->amount && $this->currency == $money->currency;
  }

  public static function dollar($amount): Money {
    return new Dollar($amount, "USD");
  }
  
  public static function franc($amount): Money {
    return new Franc($amount, "CHF");
  }

  public function __toString() {
    return $this->amount + " " + $this->currency;
  }
}