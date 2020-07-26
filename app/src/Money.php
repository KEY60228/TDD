<?php

namespace Money;

abstract class Money {
  protected $amount;

  abstract function times($multiplier): Money;

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