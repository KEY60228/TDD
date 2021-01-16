<?php

declare(strict_types=1);

namespace Money;

class Sum implements Expression{
  public $augend;
  public $addend;

  public function __construct(Expression $augend, Expression $addend) {
    $this->augend = $augend;
    $this->addend = $addend;
  }

  public function reduce (Bank $bank, String $to) {
    $amount = $this->augend->reduce($bank, $to)->getAmount() + $this->addend->reduce($bank, $to)->getAmount();
    return new Money($amount, $to);
  }

  public function plus (Expression $addend) {
      return new Sum($this, $addend);
  }
}