<?php

namespace Money;

class Pair {
  private $from;
  private $to;

  public function __construct(String $from, String $to) {
    $this->from = $from;
    $this->to = $to;
  }

  public function equals(Object $object) {
    $pair = $object;
    return $from == $pair->from && $to == $pair->to;
  }

  public function hashCode() {
    return 0;
  }
}