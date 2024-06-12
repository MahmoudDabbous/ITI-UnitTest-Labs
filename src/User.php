<?php

namespace Dabbous\Unit;

class User
{
  private $name;
  private $email;

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function name($name = '')
  {
    if($name === '')
      return $this->name;
    else
      $this->name = $name;
  }

  public function email($email = '')
  {
    if($email === '')
      return $this->email;
    else
      $this->email = $email;
  }
}
