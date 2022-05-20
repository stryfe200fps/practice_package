<?php

namespace Adi\Blogpackage;

class Calculator 
{


  private $result;

  public function __construct()
  {
    $this->result = 0; 
  }

  public function add(int $value) {
    $this->result += $value;

    return $this;

  }


}