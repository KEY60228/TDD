<?php

use PHPUnit\Framework\TestCase;
use App\Sample;

class SampleTest extends TestCase
{
  public function testReturnHello()
  {
    $sample = new Sample();
    $result = $sample->hello();

    $this->assertEquals("World", $result);
  }
}