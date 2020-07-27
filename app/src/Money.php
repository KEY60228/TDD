<?php

namespace Money;

abstract class Money {
  protected $amount;
  protected $currency;

  abstract function times($multiplier): Money;

  public function currency() {
    return $this->currency;
  }

  public function equals($object) {
    $money = $object;
    return $this->amount == $money->amount && get_class($this) == get_class($money);
  }

  public static function dollar($amount): Money {
    return new Dollar($amount);
  }
  
  public static function franc($amount): Money {
    return new Franc($amount);
  }
}