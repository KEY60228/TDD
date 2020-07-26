<?php

namespace Money;

class Money {
  protected $amount;

  public function equals($object) {
    $money = $object;
    return $this->amount == $money->amount;
  }
}