<?php

require_once __DIR__ . '/../src/Factorial.php';

use Dabbous\Unit\Factorial;
use PHPUnit\Framework\Attributes\CoversFunction;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[UsesClass(Factorial::class)]
#[CoversFunction('Factorial::calculate')]
class FactorialTest extends TestCase
{
  private $fact;

  protected function setUp(): void
  {
    $this->fact = new Factorial();
  }

  #[Test]
  public function testFactorialZero()
  {
    $this->assertEquals(1, $this->fact->calculate(0));
  }

  #[Test]
  public function testFactorialOne()
  {
    $this->assertEquals(1, $this->fact->calculate(1));
  }

  #[Test]
  public function testFactorialFive()
  {
    $this->assertEquals(120, $this->fact->calculate(5));
  }

  #[Test]
  public function testFactorialGreaterThanThree()
  {
    $this->assertEquals(720, $this->fact->calculate(6));
  }

  #[Test]
  public function testFactorialNegative()
  {
    $this->assertNull($this->fact->calculate(-3));
  }

  #[Test]
  public function testFactorialFloat()
  {
    $this->assertNull($this->fact->calculate(3.5));
  }

  #[Test]
  public function testFactorialBoolean()
  {
    $this->assertNull($this->fact->calculate(false));
  }

  #[Test]
  public function testFactorialString()
  {
    $this->assertNull($this->fact->calculate('abc'));
  }
}
