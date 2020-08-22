<?php

namespace Money;

class Bank {
  public function reduce(Expression $source, String $to): Money {
    $sum = $source;
    return $sum->reduce($to);
  }
}