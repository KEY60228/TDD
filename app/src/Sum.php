<?php

namespace Money;

class Sum implements Expression{
  public $augend;
  public $addend;

  public function construct(Money $augend, Money $addend) {

  }
}