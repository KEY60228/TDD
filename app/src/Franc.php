<?php
declare(strict_types=1);

namespace Money;

class Franc extends Money {
  public function __construct($amount, $currency) {
    parent::__construct($amount, $currency);
  }
}