<?php

declare(strict_types=1);

namespace Money;

class Sum implements Expression{
  public $augend;
  public $addend;

  public function __construct(Money $augend, Money $addend) {
    $this->augend = $augend;
    $this->addend = $addend;
  }

  public function reduce (String $to) {
    $amount = $this->augend->getAmount() + $this->addend->getAmount();
    return new Money($amount, $to);
  }
}