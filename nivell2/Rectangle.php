<?php
class Rectangle extends Shape
{
  private float $ample;
  private float $alt;

  public function __construct($ample, $alt)
  {
    $this->ample = $ample;
    $this->alt = $alt;
  }
  public function area(): float
  {
    return $this->ample * $this->alt;
  }
}
