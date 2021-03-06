<?php
declare(strict_types=1);

namespace Money;

class Money implements Expression{
  protected $amount;
  protected $currency;

  public function __construct($amount, $currency) {
    $this->amount = $amount;
    $this->currency = $currency;
  }

  public function times($multiplier): Expression {
    return new Money($this->amount * $multiplier, $this->currency);
  }

  public function currency() {
    return $this->currency;
  }

  public function equals(Money $money) {
    return $this->amount === $money->amount && $this->currency=== $money->currency;
  }

  public static function dollar($amount): Money {
    return new Money($amount, "USD");
  }
  
  public static function franc($amount): Money {
    return new Money($amount, "CHF");
  }

  public function __toString() {
    return $this->amount + " " + $this->currency;
  }

  public function plus ($addend): Expression {
    return new Sum($this, $addend);
  }

  public function getAmount(): int {
    return $this->amount;
  }

  public function reduce (Bank $bank, String $to) {
    $rate = $bank->rate($this->currency, $to);
    return new Money($this->amount / $rate, $to);
  }
}