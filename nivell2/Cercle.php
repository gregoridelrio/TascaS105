<?php
class Cercle extends Shape
{
  private float $radi;

  public function __construct($radi)
  {
    $this->radi = $radi;
  }

  public function area()
  {
    return pow(($this->radi / 2), 2) * 3.1416;
  }
}
