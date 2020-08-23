<?php

namespace Money;

interface Expression {
  public function reduce(String $to);
}