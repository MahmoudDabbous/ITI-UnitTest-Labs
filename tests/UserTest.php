<?php

require_once __DIR__ . '/../src/User.php';

use Dabbous\Unit\User;
use PHPUnit\Framework\Attributes\CoversFunction;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\Attributes\UsesClass;
use PHPUnit\Framework\TestCase;

#[UsesClass(User::class)]
#[CoversFunction('User::getName')]
#[CoversFunction('User::getEmail')]
#[CoversFunction('User::setName')]
#[CoversFunction('User::setEmail')]
class UserTest extends TestCase
{
  private $user;

  protected function setUp(): void
  {
    $this->user = new User('Dabbous', 'dabbous@example.com');
  }

  #[Test]
  public function testName()
  {
    $this->assertEquals('Dabbous', $this->user->getName());
  }

  #[Test]
  public function testChangeName()
  {
    $this->user->setName('Noha');
    $this->assertEquals('Noha', $this->user->getName());
  }

  #[Test]
  public function testEmail()
  {
    $this->assertEquals('dabbous@example.com', $this->user->getEmail());
  }

  #[Test]
  public function testChangeEmail()
  {
    $this->user->setEmail('nohasalah@iti.gov.eg');
    $this->assertEquals('nohasalah@iti.gov.eg', $this->user->getEmail());
  }
}
