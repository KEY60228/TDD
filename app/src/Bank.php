<?php

namespace Money;

class Bank {
  public function reduce(Expression $source, String $to): Money {
    if ($source instanceof Money) {
      return $source;
    }
    $sum = $source;
    return $sum->reduce($to);
  }
}