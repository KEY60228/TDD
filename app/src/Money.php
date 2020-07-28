<?php

namespace Money;

abstract class Money {
  protected $amount;
  protected $currency;

  public function __construct($amount, $currency) {
    $this->amount = $amount;
    $this->currency = $currency;
  }

  abstract function times($multiplier): Money;

  public function currency() {
    return $this->currency;
  }

  public function equals($object) {
    $money = $object;
    return $this->amount == $money->amount && get_class($this) == get_class($money);
  }

  public static function dollar($amount): Money {
    return new Dollar($amount, "USD");
  }
  
  public static function franc($amount): Money {
    return new Franc($amount, "CHF");
  }
}