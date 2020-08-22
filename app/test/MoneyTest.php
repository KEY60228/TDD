<?php
declare(strict_types=1);

namespace Money;

use PHPUnit\Framework\TestCase;
use Money\Dollar;
use Money\Franc;
use Money\Money;
use Money\Sum;

class MoneyTest extends TestCase {
  public function testMultiplication() {
    $five = Money::dollar(5);
    $this->assertEquals(Money::dollar(10), $five->times(2));
    $this->assertEquals(Money::dollar(15), $five->times(3));
  }

  public function testEquality() {
    $this->assertTrue((Money::dollar(5))->equals(Money::dollar(5)));
    $this->assertFalse((Money::dollar(5))->equals(Money::dollar(6)));
    $this->assertFalse((Money::franc(5))->equals(Money::dollar(5)));
  }

  public function testSimpleAddition() {
    $five = Money::dollar(5);
    $sum = $five->plus($five);
    $bank = new Bank();
    $reduced = $bank->reduce($sum, "USD");
    $this->assertEquals(Money::dollar(10), $reduced);
  }

  public function testPlusReturnSum() {
    $five = Money::dollar(5);
    $result = $five->plus($five);
    $sum = $result;
    $this->assertEquals($five, $sum->augend);
    $this->assertEquals($five, $sum->addend);
  }

  public function testReduceSum() {
    $sum = new Sum(Money::dollar(3), Money::dollar(4));
    $bank = new Bank();
    $result =$bank->reduce($sum, "USD");
    $this->assertEquals(Money::dollar(7), $result);
  }
}