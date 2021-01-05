<?php

namespace Money;

interface Expression {
  public function plus(Expression $addend);
  public function reduce(Bank $bank, String $to);
}